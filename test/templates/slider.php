<div id="carouselControls" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<?php
			$args = array(
				'numberposts' => 3,
				'orderby'     => 'date',
				'order'       => 'DESC',
				'post_type'   => 'post'
			);

			$posts = get_posts( $args );

			foreach ($posts as $key => $post):
				setup_postdata($post);
				global $assets_class, $post_category;
				$assets_class = ($key == 0) ? 'active' : '';
				$post_category = ( isset(get_the_category()[0]) ) ? get_the_category()[0] : false;
				get_template_part('templates/slide', 'card');
			endforeach;

			wp_reset_postdata();
		?>
	</div>
	<div class="carousel__navs d-flex">
		<a
			class="carousel-control-prev"
			href="#carouselControls"
			role="button"
			data-slide="prev">

			<i class="fas fa-caret-left carousel-control-prev-icon" aria-hidden="true"></i>
			<span class="sr-only">
				Previous
			</span>
		
		</a>
		<a
			class="carousel-control-next"
			href="#carouselControls"
			role="button"
			data-slide="next">

			<i class="fas fa-caret-right carousel-control-next-icon" aria-hidden="true"></i>
			<span class="sr-only">
				Next
			</span>
		
		</a>
	</div>
</div>