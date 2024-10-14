<?php

    // BITRIX24
    //Вызываем функцию для перехвата данных
    add_action( 'wpcf7_mail_sent', 'your_wpcf7_mail_sent_function' );
    function your_wpcf7_mail_sent_function( $contact_form ) {

	    //подключение к серверу CRM
	    define('CRM_HOST', 'fincom.bitrix24.ru'); // Ваш домен CRM системы
	    define('CRM_PORT', '443'); // Порт сервера CRM. Установлен по умолчанию
	    define('CRM_PATH', '/crm/configs/import/lead.php'); // Путь к компоненту lead.rest

	    //авторизация в CRM
	    define('CRM_LOGIN', 'a.crm@fc-g.com'); // Логин пользователя Вашей CRM по управлению лидами
	    define('CRM_PASSWORD', '7qEbJnZri'); // Пароль пользователя Вашей CRM по управлению лидами

	    //перехват данных из Contact Form 7
	    $title = $contact_form->title;
	    $posted_data = $contact_form->posted_data;
	    if ('Форма обратной связи' == $title ) { //Вместо "Контактная форма 1" необходимо указать название Вашей контактной формы
		    $submission = WPCF7_Submission::get_instance();
		    $posted_data = $submission->get_posted_data();
		    //далее мы перехватывает введенные данные в Contact Form 7
		    $lid_name = $posted_data['text-381'];
		    $lid_phone = $posted_data['tel-182'];
		    $lid_email = $posted_data['email-837'];
		    $lid_message = $posted_data['textarea-695'];
		    $pageTitle = $posted_data['text-564'];

		    //сопостановление полей Bitrix24 с полученными данными из Contact Form 7
		    $postData = array(
			    'TITLE' => 'Лид со страницы ' . $pageTitle, // Установить значение свое значение
			    'NAME' => $lid_name,
			    'PHONE_WORK' => $lid_phone,
			    'EMAIL_HOME' => $lid_email,
			    'COMMENTS' => $lid_message
		    );

		    //передача данных из Contact Form 7 в Bitrix24
		    if (defined('CRM_AUTH')) {
			    $postData['AUTH'] = CRM_AUTH;
		    } else {
			    $postData['LOGIN'] = CRM_LOGIN;
			    $postData['PASSWORD'] = CRM_PASSWORD;
		    }

		    $fp = fsockopen("ssl://".CRM_HOST, CRM_PORT, $errno, $errstr, 30);
		    if ($fp) {
			    $strPostData = '';
			    foreach ($postData as $key => $value)
				    $strPostData .= ($strPostData == '' ? '' : '&').$key.'='.urlencode($value);

			    $str = "POST ".CRM_PATH." HTTP/1.0\r\n";
			    $str .= "Host: ".CRM_HOST."\r\n";
			    $str .= "Content-Type: application/x-www-form-urlencoded\r\n";
			    $str .= "Content-Length: ".strlen($strPostData)."\r\n";
			    $str .= "Connection: close\r\n\r\n";

			    $str .= $strPostData;

			    fwrite($fp, $str);

			    $result = '';
			    while (!feof($fp))
			    {
				    $result .= fgets($fp, 128);
			    }
			    fclose($fp);

			    $response = explode("\r\n\r\n", $result);

			    $output = '<pre>'.print_r($response[1], 1).'</pre>';
		    } else {
			    echo 'Connection Failed! '.$errstr.' ('.$errno.')';
		    }
	    }
    }