<?php

    define('STANDART_DIR', get_stylesheet_directory_uri() . '/prod/');
    define('ROOT_DIR', get_stylesheet_directory_uri());

    // Отключаем админбар
    // if ( ! current_user_can( 'manage_options' ) ) {
    //     show_admin_bar( false );
    // }
    // Включаем показ ошибок AJAX
    // if( WP_DEBUG && WP_DEBUG_DISPLAY && (defined('DOING_AJAX') && DOING_AJAX) ){
    //     @ ini_set( 'display_errors', 1 );
    // }

    /* Actions */
    include_once(__DIR__ . '/inc/actions.php');
    /* Filters */
    include_once(__DIR__ . '/inc/filters.php');
    /* Bitrix24 webhook */
    include_once(__DIR__ . '/inc/bitrix24-webhook.php');
    /* Custom Functions */
    include_once(__DIR__ . '/inc/custom-functions.php');