<?php

add_action('admin_menu', 'ourBasicSettings');

function ourBasicSettings()
{
	add_menu_page(
		'Настройки сайта',
		'О компании',
		'manage_options',
		'our-basic-settings',
		'ourBasicSettingsOutput'
	);
}

function ourBasicSettingsOutput()
{
	?>
<p>В данном разделе редактируются:</p>
<ul>
	<li><a href="/wp-admin/admin.php?page=acf-phone-settings">Номер телефона компании</a></li>
	<li><a href="/wp-admin/admin.php?page=acf-footer-logo-settings">Логотип в футере</a></li>
</ul>
	<?php
}