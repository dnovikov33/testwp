<?php global $assets_class, $post_category; ?>
<div class="carousel-item rounded bg-primary <?= ($assets_class) ? $assets_class : '' ?>">
	<div class="row">
		<div class="col-sm-12 col-md-6 col-lg-4">
			<div class="carousel__info d-flex flex-wrap justify-content-between align-items-start">
				<a href="<?= get_permalink() ?>" class="carousel__link d-block flex-basis-100 text-white h4">
					<?php the_title() ?>
				</a>
				<div class="mt-auto">
					<div class="d-flex align-items-center mb-2">
						<i class="far fa-clock carousel__clock mr-2"></i>
						<p class="carousel__date">
							<?php the_date('j F Y'); ?>
						</p>
					</div>
					
					<?php if ($post_category): ?>
						<a href="<?= get_category_link($post_category) ?>" class="btn btn-sm btn-link bg-white">
							<?= $post_category->cat_name ?>
						</a>
					<?php endif; ?>
				
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-8 pl-md-0">
			<?php
				the_post_thumbnail(
					'full',
					array(
						'class' => 'carousel__image bg-dark rounded-right w-100 h-100'
					)
				);
			?>
		</div>
	</div>
</div>