<?php
	/* Подключение стилей и скриптов */
	add_action( 'wp_enqueue_scripts', function() {

		wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/prod/css/main.css', [], time() );

		wp_enqueue_script( 'jquery' );

		wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/prod/js/index.bundle.js', [], time(), true );

	} );

	add_action( 'after_setup_theme', function(){

		// Регистрируем главное меню
		register_nav_menu('header-menu', 'Меню в шапке');

		register_nav_menu('header-menu-mobile', 'Мобильное меню в шапке');

		// Регистрируем меню в подвале
		register_nav_menu('footer-menu', 'Подвал - Основное меню');

		// Смена логотипа
		add_theme_support('custom-logo');

		/* Добавляем возможность ставить постам миниатюры */
		add_theme_support('post-thumbnails');

		/* Тайтлы старницы ставятся автоматом */
		add_theme_support('title-tag');

		/* Включаем поддержку html5 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		/* Отключаем админбар */
		add_theme_support( 'admin-bar', ['callback' => '__return_false'] );

	});

	//Добавление "Цитаты" для страниц
	add_action('init', function() {
		add_post_type_support('page', array('excerpt'));
	});

	//колонка "Шаблон" в списке страниц админки start
	function wph_columns_names_layout($defaults) {
		$defaults['page-layout'] = __('Template');
		return $defaults;
	}
	function wph_add_column_layout($column_name, $id) {
		if($column_name === 'page-layout') {
			$set_template = get_post_meta(get_the_ID(), '_wp_page_template', true);
			if ($set_template == 'default') {
				echo 'Шаблон по умолчанию';
			}
			$templates = get_page_templates();
			ksort($templates);
			foreach (array_keys($templates) as $template) :
				if ($set_template == $templates[$template]) echo $template;
			endforeach;
		}
	}

	add_filter('manage_pages_columns', 'wph_columns_names_layout', 5);
	add_action('manage_pages_custom_column', 'wph_add_column_layout', 5, 2);

	function wph_css_for_column_layout() {
		echo '<style>
		    .column-page-layout {
		        width: 8%;
		    } 
        	</style>';
	}

	add_action('admin_head', 'wph_css_for_column_layout');

	function onwp_is_post_type(string $post_type)
	{
		global $post;

		if(!$post) return false;

		$original_post_type = get_post_type( $post->ID );

		if($original_post_type === $post_type) return true;

		return false;
	}

	add_filter( 'pll_get_post_types', 'add_cpt_to_pll', 10, 2 );


	add_action( 'wp_footer', function() {

		?>

		<script type="text/javascript" defer>
            let title = document.title;
            let getInput = document.querySelector('input[name="text-564"]').value;
            let pageTitle = getInput + ' | ' + title;

            console.log(pageTitle);
		</script>


		<?php

	});