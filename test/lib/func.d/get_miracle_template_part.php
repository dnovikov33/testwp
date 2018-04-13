<?php

/**
 *   Included file template from theme
 *   @autor   Dmitriy Novikov
 *   @version 1.0
 *   @date    2018-04-12
 *   @param   string         $file_name   file name
 *   @param   string         $name_prefix file prefix
 *   @return  void
 */
function get_miracle_template_part($file_name = '', $name_prefix = '')
{
	$path = $file_name . $name_prefix . '.php';
	$file = locate_template($path);

	if (file_exists($file)):
		return $file;
	else:
		return '';
	endif;
}