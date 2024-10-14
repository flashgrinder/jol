<?php

	/* Убираем тег <p></p> у отрывков */
	remove_filter( 'the_excerpt','wpautop');

	add_filter('wpcf7_autop_or_not', '__return_false');

	// Окончание отрывков постов
	add_filter( 'excerpt_more', function($more_string){
		return '...';
	});

	// Добавляет класс пунктам меню в шапке
	add_filter( 'nav_menu_css_class', function($classes, $item, $args, $depth) {

		if($args->theme_location === 'header-menu' || $args->theme_location === 'header-menu-mobile') {
			$classes[] = 'menu__item header__menu-item';
		}

		return $classes;

	}, 10, 4 );

	// Добавляет класс ссылкам меню в шапке
	add_filter( 'nav_menu_link_attributes', function( $atts, $item, $args ) {

		if($args->theme_location === 'header-menu' || $args->theme_location === 'header-menu-mobile') {
			$atts['class'] = 'header__menu-link menu__link';
		}

		return $atts;

	}, 10, 3);

	// Добавляет активный класс к пунктам меню
	add_filter('nav_menu_css_class' , function($classes, $item) {

		if ( in_array('current-menu-item', $classes) ){

			$classes[] = 'is-active ';

		}
		return $classes;

	}, 10 , 2);

	// Добавляем класс к подменю в шапке
	add_filter( 'nav_menu_submenu_css_class', function( $classes, $args, $depth ) {

		if ( $args->theme_location == 'header-menu' || $args->theme_location == 'header-menu-mobile' ) {

			$classes[] = 'header__menu-item';
			$classes[] = 'menu__sub-menu';

		}

		return $classes;
	}, 10, 3);

	// Добавляет класс пунктам меню в подвале
	add_filter( 'nav_menu_css_class', function($classes, $item, $args, $depth) {

		if( $args->theme_location === 'footer-menu' ) {
			$classes[] = 'footer__main-menu-item';
		}

		return $classes;

	}, 10, 4 );

	// Добавляет класс ссылкам меню в подвале
	add_filter( 'nav_menu_link_attributes', function( $atts, $item, $args ) {

		if( $args->theme_location === 'footer-menu' ) {
			$atts['class'] = 'footer__main-menu-link';
		}

		return $atts;

	}, 10, 3);