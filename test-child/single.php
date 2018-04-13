<?php get_header(); ?>
<pre>
<?php 
$arr = array(rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10));
echo "Default array: ";
print_r($arr);
print_r(divide_array($arr, 3));
 ?>
 </pre>
<?php get_footer(); ?>

<style type="text/css">
	body {
		height: 100vh;
		display: flex;
		flex-direction: column;
		justify-content: space-between;
	}
</style>