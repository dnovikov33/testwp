<?php

add_action('wp_enqueue_scripts', 'miracle_init_scripts');
function miracle_init_scripts() {
		miracle_reg_scripts( 'app' );
		wp_enqueue_script( 'fontaAwesome', 'https://use.fontawesome.com/releases/v5.0.10/js/all.js', null, null, true);
}

/**
 *   По переданной строке регистрирует css и js скрипты
 *   @autor   Novikov Dmitriy
 *   @version 1.0
 *   @date    2018-03-15
 *   @param   string      $name     имя скрипта
 *   @return  void            
 */
function miracle_reg_scripts( $name = '' ) {

	$js = get_template_directory_uri().'/frontend/dist/js/';
	$css = get_template_directory_uri().'/frontend/dist/css/';
		
	wp_register_script(
		$name . '-js',
		$js . $name . '.js',
		false,
		null,
		true
	);

	wp_register_style(
		$name . '-css',
		$css . $name . '.css',
		null,
		null,
		'all'
	);

	wp_enqueue_style( $name . '-css' );
	wp_enqueue_script( $name . '-js' );
	
	wp_localize_script( $name . '-js', 'ajax',
		array(
			'url' => admin_url( 'admin-ajax.php' ),
			'nonce' => wp_create_nonce( 'Project secret nonce' )
		)
	);
}