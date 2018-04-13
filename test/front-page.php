<?php get_header(); ?>
<?php get_header('front'); ?>
<div class="container mb-5">
	<div class="row">
		<div class="col-sm-12 col-lg-4 mb-4">
			<div class="card border-0">
				<p class="card-title h5 font-weight-normal">О нас</p>
			</div>
			<div class="card bg-secondary text-white border-0">
				<div class="card-body">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-lg-8">
			<div class="card border-0">
				<p class="card-title h5 font-weight-normal">Новости</p>
			</div>
			<?php
				$args = array(
					'numberposts' => 3,
					'orderby'     => 'ID',
					'order'       => 'ASC',
					'post_type'   => 'news'
				);

				$posts = get_posts( $args );

				foreach ($posts as $key => $post):
					setup_postdata($post);
					get_template_part('templates/news', 'card');
				endforeach;

				wp_reset_postdata();
			?>
		</div>
	</div>
</div>

<?php
	get_template_part("templates/front-page", "myshortcode");
?>

<?php get_footer(); ?>
