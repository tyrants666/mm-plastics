<?php

					// include( get_template_directory() . '/includes/menus.php' );
					include( get_template_directory() . '/includes/assets.php' );
					include( get_template_directory() . '/includes/security.php' );
					include( get_template_directory() . '/includes/theme-supports.php' );
					include( get_template_directory() . '/includes/form-submit.php' );
					// include( get_template_directory() . '/includes/widgets.php' );
					// include( get_template_directory() . '/includes/pagination-numbered.php' );
					// include( get_template_directory() . '/includes/categories-custom-archive.php' );
					// include( get_template_directory() . '/includes/custom-post-type/register.php' );
					// include( get_template_directory() . '/includes/custom-post-type/post-per-page.php' );
					// include( get_template_directory() . '/includes/custom-post-type/enable-category.php' );
					// include( get_template_directory() . '/includes/custom-post-type/highlight-menu.php' );
					// include( get_template_directory() . '/includes/custom-post-type/search-result-archive.php' );
					// include( get_template_directory() . '/includes/assets-custompage.php' );


					add_action('wp_enqueue_scripts', 'assets');
					// add_action('after_setup_theme', 'menu_register');
					// add_action('after_setup_theme', 'theme_support');
					add_action( 'wp_security', 'security' );
					// add_action( 'widgets_init', 'register_widgets' );
					// add_filter( 'category_template', 'category_custom_archive' );
					//CPT
					// add_action('nav_menu_css_class', 'cpt_menu_highlight_navbar', 10, 2 );


					//Ajax Form submit
					// add_action( 'wp_ajax_send_email', 'callback_send_email' );
					// add_action( 'wp_ajax_nopriv_send_email', 'callback_send_email' );
					// add_action( 'wp_ajax_contact_email', 'callback_contact_email' );
					// add_action( 'wp_ajax_nopriv_contact_email', 'callback_contact_email' );

					//Security Headers
					// function tgm_io_strict_transport_security() {
					// 	header( 'Strict-Transport-Security: max-age=10886400; includeSubDomains; preload' );
					// }
					// add_action( 'send_headers', 'tgm_io_strict_transport_security' );

?>
