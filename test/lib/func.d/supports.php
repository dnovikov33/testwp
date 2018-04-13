<?php

add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
add_action('after_setup_theme', 'theme_register_nav_menu');

/**
 *   Regiter nav menu
 *   @autor   Dmitriy Novikov
 *   @version 1.0
 *   @date    2018-04-12
 *   @return  void
 */
function theme_register_nav_menu() {
	register_nav_menu('primary', 'Основное меню');
	add_post_type_support( 'news', 'post-thumbnails' );
}