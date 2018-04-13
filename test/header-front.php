<header class="container py-4">
	<div class="row align-items-center justify-content-between">
		<div class="col-auto">
			<?php the_custom_logo(); ?>	
		</div>
		<div class="col-auto">
			<a href="<?= get_field('acf-telephone', 'option') ?>" 
				class="mb-0 font-weight-normal h5">
				<?= get_field('acf-telephone', 'option') ?>
			</a>
		</div>
	</div>
</header>
<section class="bg-light-gradient mb-5">
	<div class="container">
		<div class="row align-items-center justify-content-baseline">
			<div class="col">
				<nav class="navbar navbar-expand-lg navbar-light px-0 py-3">
					<button
						class="navbar-toggler"
						type="button"
						data-toggle="collapse"
						data-target="#navbarToggler"
						aria-controls="navbarToggler"
						aria-expanded="false"
						aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse order-1 mw-100 order-lg-0" id="navbarToggler">
						<?php 
							wp_nav_menu( array(
								'theme_location'  => 'primary',
								'menu'			  => 'Menu 1',
								'menu_class'      => 'navbar-nav nav-miracle mr-auto mt-2 mt-lg-0', 
								'container'       => '',
								'walker'          => new WP_Bootstrap_Navwalker(),
							) );
						?>
					</div>
					<div class="my-2 my-lg-0">
						<?php dynamic_sidebar( 'search-sidebar' ); ?>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<div class="container">
		<?php get_template_part('templates/slider') ?>
	</div>
</section>