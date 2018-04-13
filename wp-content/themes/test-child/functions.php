<?php 
/**
 *   Add test shortcode
 *   @autor   Dmitriy Novikov
 *   @version 1.0
 *   @date    2018-04-12
 *   @return  void
 */
function hellow_func( $atts ){
	 return "<div class='test-shortcode'>Hello Word!</div>";
}
add_shortcode('hellow', 'hellow_func');

/**
 *   Test task divide array on groups
 *   @autor   Dmitriy Novikov
 *   @version 1.0
 *   @date    2018-04-12
 *   @arr 	  array of numbers to divide
 *   @n 	  number of digits in subgroups
 *   @return  array with subgroups
 */
function divide_array($arr = array(), $n = 1) {
	if (!is_array($arr))
		throw new Exception('The first argument is not an array');

	if (!is_int($n))
		$n = (is_numeric($n)) ? intval($n, 10) : 1;

	$sum = array_sum($arr);
	$single_sum = floor($sum / $n);
	sort($arr);
	$arr = array_reverse($arr);

	$output = array();

	$iterator = 0;

	while ($iterator < $n) {
		$output[$iterator] = array();
		foreach ($arr as $key => $value) {
			if ((array_sum($output[$iterator]) + $value) <= $single_sum) {
				array_push($output[$iterator], $value);
				unset($arr[$key]);

				if (array_sum($output[$iterator]) == $single_sum)
					break 1;
			}
		}
		$iterator++;
	}

	return $output;
}

 ?>