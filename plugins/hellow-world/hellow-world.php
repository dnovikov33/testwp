<?php
/*
Plugin Name: Test "Hello World"
Description: Displays on the main page "Hello World"
Version: 1.0
Author: Dmitriy Novikov
*/

function my_formatter($content) {
	$percent = round( intval(date('H'), 10) / 24 * 100 );
	$num = round((100 - $percent) * 255 / 100);
	return $content . '<p style="color: rgba(' . $num . ', ' . $num . ', ' . $num . ', 1)">Hello World</p>';
}
 
add_filter('the_content', 'my_formatter', 99);