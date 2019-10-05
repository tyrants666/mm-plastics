<?php
					function theme_support(){

					         //Add Featured Image support
					         add_theme_support('post-thumbnails');
									 add_image_size('small-thumbnail', 180, 120, true);    //true means hard cropping
									 add_image_size('banner-thumbnail', 920, 210, true);
									 add_theme_support( 'custom-logo' );

                   // Custom Excerpt Length
                   // add_filter( 'excerpt_length', function($length) {
                   // 	return 120;
                   // } );
					}
 ?>
