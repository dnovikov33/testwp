<a href="<?= get_permalink() ?>" class="news mb-4 text-dark d-flex flex-wrap flex-sm-nowrap justify-content-start text-center text-sm-left align-items-start">
	<div class="mr-sm-4 mb-2 mb-sm-0 flex-basis-100-xs">
		<img class="news__img rounded" src="<?= get_the_post_thumbnail_url(null, 'full' ) ?>">
	</div>
	<div class="d-flex flex-wrap col">
		<p class="news__date flex-basis-100 mb-1 text-muted">
			<?php the_date('j F Y'); ?>
		</p>
		<p class="news__excerpt flex-basis-100 mb-0">
			<?php the_title() ?>
		</p>
	</div>
</a>