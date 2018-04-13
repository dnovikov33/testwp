<?php
/**
 *   Register custom post for news
 *   @autor   Dmitriy Novikov
 *   @version 1.0
 *   @date    2018-04-12
 *   @return  void
 */
add_action('init', 'register_custom_news_post');
function register_custom_news_post()
{
	$labels = array(
		'name'               => 'Новости',
		'singular_name'      => 'Новость',
		'add_new'            => 'Добавить новость',
		'add_new_item'       => 'Новая новость',
		'all_items'          => 'Все новости',
		'edit_item'          => 'Редактирование новость',
		'new_item'           => 'Новая новость',
		'view_item'          => 'Смотреть новость',
		'search_items'       => 'Искать в новостях',
		'not_found'          => 'Не найдено новости',
		'not_found_in_trash' => 'Не найдено новости в корзине',
		'parent_item_colon'  => 'Родительский элемент',
	);

	$args = array(
		'labels' => $labels,
		'public'                 => true,
		'publicly_queryable'     => true,
		'exclude_from_search'    => true,
		'show_in_admin_bar'		 => true,
		'show_ui'                => true,
		'show_in_menu'           => true,
		'show_in_nav_menus'      => false,
		'show_in_rest'           => false,
		'menu_position'          => 3,
		'menu_icon'              => 'dashicons-archive',
		'capability_type'        => 'post',
		'map_meta_cap'           => true,
		'hierarchical'           => false,
		'supports'                => array(
			'title',
			'editor',
			'thumbnail',
		),
		'has_archive'            => false,
		'rewrite'                => true,
		'query_var'              => true,
	);
	
	register_post_type( 'news', $args);
}