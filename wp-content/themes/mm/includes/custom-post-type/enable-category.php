<?php
//Enabling to open Category pages for Custom Post Types. ************************************************************************************************************************************************

						//Events
						function events_enable_category($query) {

						  if( is_category() ) {
  						    $post_type = get_query_var('post_type');
  						    if($post_type)
  						        $post_type = $post_type;
  						    else
  						        $post_type = array('nav_menu_item', 'post', 'events');  // don't forget nav_menu_item to allow menus to work!
  						    $query->set('post_type',$post_type);
  						    return $query;
						   }

						}

						//Cases
						function cases_enable_category($query) {

						  if( is_category() ) {
  						    $post_type = get_query_var('post_type');
  						    if($post_type)
  						        $post_type = $post_type;
  						    else
  						        $post_type = array('nav_menu_item', 'post', 'cases');  // don't forget nav_menu_item to allow menus to work!
  						    $query->set('post_type',$post_type);
  						    return $query;
						   }

						}
 ?>
