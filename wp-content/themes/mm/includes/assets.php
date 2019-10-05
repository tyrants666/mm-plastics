<?php
// func to enqueue CSS & JS ************************************************************************************************************************************************
					function assets() {
						wp_enqueue_style( 'responsive.css', get_template_directory_uri() . '/css/bootstrap.min.css');
						wp_enqueue_style( 'style', get_stylesheet_uri());
						wp_enqueue_style( 'owl', get_template_directory_uri() . '/css/owl.carousel.min.css');
						wp_enqueue_style( 'owl theme', get_template_directory_uri() . '/css/owl.theme.default.min.css');
						wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css');
						wp_enqueue_style( 'myanimate', get_template_directory_uri() . '/css/my-animate.css');

						wp_enqueue_script( 'js', get_template_directory_uri() . '/main.js', array(), '20151215', true);                              //, array(), '20151215', true
						wp_enqueue_script( 'bootstrap.js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true);
						wp_enqueue_script( 'owl.js', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20151215', true);
						wp_enqueue_script( 'mousewhell.js', get_template_directory_uri() . '/js/jquery.mousewheel.js', array(), '20151215', true);

					}

// Func to load jquery
					function load_js(){
						wp_enqueue_script('jquery');
					}
?>
