<?php
function events_register(){

  //Events

  $labels = array(
      'name' => 'Events',
      'singular_name' => 'Event',
      'add_new' => 'Add Event',
      'all_items' => 'All Events',
      'add_new_item' => 'Add Event',
      'edit_item' => 'Edit Events',
      'new_item' => 'New Events',
      'view_item' => 'View Events',
      'search_item' => 'Search Events',
      'not_found' => 'No Events Found',
      'not_found_in_trash' => 'No Events found in trash',
      'parent_item_colon' => 'Parent Events',

  );
  $args = array(
      'labels' => $labels,
      'public' => true,
      'has_archive' => true,
      'publicly_queryable' => true,
      'query_var' => true,
      'rewrite' => true,               					//rewrite custom slug
      'capability_type' => 'post',               //grabs default settings of premade Custom Post Types
      'hierarchical' => true,                //We dont want to create or extend hierarchy to any work because every single post wont depend on anything so false
      'supports' => array(
           'title',
           'editor',
           'excerpt',
           'thumbnail',
      ),
      'show_in_rest'       => true,             //Add Gutenberg text editor
      'taxonomies' => array( 'category', 'post_tag'),
      'menu_position' =>  4,
      'exclude_from_search' => false,
      'slug' => 'events', 'with_front' => true  //Helps to open url with Events/priyanka-karki

  );
  register_post_type('events', $args);          //work here is slug name that will appear in url

}


//Cases
function cases_register(){

  $labels = array(
      'name' => 'Cases',
      'singular_name' => 'Cases',
      'add_new' => 'Add Cases',
      'all_items' => 'All Cases',
      'add_new_item' => 'Add Cases',
      'edit_item' => 'Edit Cases',
      'new_item' => 'New Cases',
      'view_item' => 'View Cases',
      'search_item' => 'Search Cases',
      'not_found' => 'No Cases Found',
      'not_found_in_trash' => 'No Cases found in trash',
      'parent_item_colon' => 'Parent Cases',

  );
  $args = array(
      'labels' => $labels,
      'public' => true,
      'has_archive' => true,
      'publicly_queryable' => true,
      'query_var' => true,
      'rewrite' => true,               					//rewrite custom slug
      'capability_type' => 'post',               //grabs default settings of premade Custom Post Types
      'hierarchical' => true,                //We dont want to create or extend hierarchy to any work because every single post wont depend on anything so false
      'supports' => array(
           'title',
           'editor',
           'excerpt',
           'thumbnail',
      ),
      'show_in_rest'       => true,             //Add Gutenberg text editor
      'taxonomies' => array( 'category', 'post_tag'),
      'menu_position' =>  4,
      'exclude_from_search' => false,
      'slug' => 'cases', 'with_front' => true  //Helps to open url with Cases/priyanka-karki

  );
  register_post_type('cases', $args);          //work here is slug name that will appear in url

}
?>
