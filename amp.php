<?php
/**
 * Dropin Name: MD AMP
 * Dropin Author: Gaurav Tiwari
 * Dropin Description: Add AMP support
 * Dropin Version: 1.0
 * @since MD5.2.3
 */

/* AMP into MD Menu */
add_theme_support(
	'amp',
	array(
		'nav_menu_toggle'   => array(
			'nav_container_xpath'           => '/html/body/header/div/div/div[2]/nav',
			'nav_container_toggle_class' => 'active',
			'menu_button_id'             => 'header-menu-trigger',
			'menu_button_toggle_class'   => 'active',
		),
	)
);
add_action('wp_head', 'md_amp_styles', 100);

function md_amp_styles()
{?>
 <style>
 html[amp] .noamp{display:none;}
html[amp] .fullamp{width:100%}
@media (max-width: 900px){html[amp] .header-menu.active {display: block;}}
</style>
<?php }