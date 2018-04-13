<?php

if( function_exists('acf_add_options_sub_page') ) {
    acf_add_options_sub_page(
        array(
            'page_title'  => 'Логотип в футере',
            'menu_title'  => 'Логотип',
            'menu_slug'   => 'acf-footer-logo-settings',
            'capability'  => 'manage_options',
            'position'    => false,
            'parent_slug' => 'our-basic-settings',
            'icon_url'    => false,
            'redirect'    => true,
            'post_id'     => 'options',
            'autoload'    => false
        )
    );
}