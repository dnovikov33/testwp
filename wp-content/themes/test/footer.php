<?php $logo = get_field('footer-logo', 'option'); ?>
		
		<div class="footer p-5">
			<div class="container">
				<a href="/">
					<img src="<?= $logo['url'] ?>" alt="<?= $logo['alt'] ?>" title="<?= $logo['title'] ?>">
				</a>
			</div>
		</div>

		<?php wp_footer(); ?>
		<?php if (defined('DEVMODE')): ?>
			<script src="//localhost:35729/livereload.js"></script>
		<?php endif; ?>
	</body>
</html>
