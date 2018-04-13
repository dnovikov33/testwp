<?php get_header(); ?>
<pre>
<?php 
print_r(divide_array(array(rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10)), 3));
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