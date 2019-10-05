<?php
//Search Result for custom post type ************************************************************************************************************************************************

function events_search_result_archive($template)
{
  global $wp_query;
  $post_type = get_query_var('post_type');
  if( $wp_query->is_search && $post_type == 'events' )
  {
    return locate_template('archive-events.php');  //  redirect to custom-category.php
  }
  return $template;
}

function cases_search_result_archive($template)
{
  global $wp_query;
  $post_type = get_query_var('post_type');
  if( $wp_query->is_search && $post_type == 'cases' )
  {
    return locate_template('archive-cases.php');  //  redirect to custom-category.php
  }
  return $template;
}
 ?>
