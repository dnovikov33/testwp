<?php
/**
 *   Register search widgets
 *   @autor   Dmitriy Novikov
 *   @version 1.0
 *   @date    2018-04-12
 *   @return  void
 */
function register_search_widgets(){
	register_sidebar( array(
		'name' => 'Форма поиска',
		'id' => 'search-sidebar',
		'description' => 'Выводиться форма поиска',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	) );
}
add_action( 'widgets_init', 'register_search_widgets' );