<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>
			<?php echo wp_get_document_title(); ?>
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php $favicon_path = get_stylesheet_directory_uri()."/favicon" ?>
		<link rel="apple-touch-icon" sizes="57x57" href="<?= $favicon_path ?>/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?= $favicon_path ?>/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?= $favicon_path ?>/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?= $favicon_path ?>/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?= $favicon_path ?>/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?= $favicon_path ?>/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?= $favicon_path ?>/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?= $favicon_path ?>/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?= $favicon_path ?>/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?= $favicon_path ?>/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?= $favicon_path ?>/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?= $favicon_path ?>/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?= $favicon_path ?>/favicon-16x16.png">
		<link rel="manifest" href="<?= $favicon_path ?>/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<?php wp_head(); ?>
	</head>		
	<body <?php body_class(); ?>>
	<!--[if lt IE 7]>
		<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->