<?php

/************* CREATE A NEW POST TYPE : PERSONAL POST *********************/

function alex_personal_custom_post()
{
    // creating (registering) the custom type 
    register_post_type(
        'personal-post', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
        // let's now add all the options for this post type
        array(
            'labels' => array(
                'name' => __('Personal Post'), /* This is the Title of the Group */
                'singular_name' => __('Personal Post'), /* This is the individual type */
                'all_items' => __('All Personal Post'), /* the all items menu item */
                'add_new' => __('Create New'), /* The add new menu item */
                'add_new_item' => __('Create new Personal Post'), /* Add New Display Title */
                'edit' => __('Edit'), /* Edit Dialog */
                'edit_item' => __('Edit Personal Post'), /* Edit Display Title */
                'new_item' => __('New Personal Post'), /* New Display Title */
                'view_item' => __('View Personal Post'), /* View Display Title */
                'search_items' => __('Search Personal Post'), /* Search Custom Type Title */
                'not_found' =>  __('Nothing found in the Database.'), /* This displays if there are no entries yet */
                'not_found_in_trash' => __('Nothing found in Trash'), /* This displays if there is nothing in the trash */
                'parent_item_colon' => ''
            ), /* end of arrays */
            'description' => __('This is the example Personal Post'), /* Custom Type Description */
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'query_var' => true,
            'menu_position' => 3, /* this is what order you want it to appear in on the left hand side menu */
            'menu_icon' => 'dashicons-admin-customizer', /* the icon for the custom post type menu */
            'rewrite'    => array('slug' => __('creations')), /* you can specify its url slug */
            'has_archive' => true, /* you can rename the slug here */
            //'capability_type' => 'post',
            'hierarchical' => false,
            /* the next one is important, it tells what's enabled in the post editor */
            'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'revisions', 'sticky')
        ) /* end of options */
    ); /* end of register post type */

    /* this adds your post categories to your custom post type */
    //register_taxonomy_for_object_type( 'category', 'Press releases' );
    /* this adds your post tags to your custom post type */
    // register_taxonomy_for_object_type( 'post_tag', 'Press releases' );
}
add_action('init', 'alex_personal_custom_post');
