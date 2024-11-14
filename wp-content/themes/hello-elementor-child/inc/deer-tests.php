<?php
function create_deer_tests_post_type() {
    $labels = [
        'name'                  => 'Deer Tests',
        'singular_name'         => 'Deer Test',
        'menu_name'             => 'Deer Tests',
        'name_admin_bar'        => 'Deer Test',
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New Deer Test',
        'new_item'              => 'New Deer Test',
        'edit_item'             => 'Edit Deer Test',
        'view_item'             => 'View Deer Test',
        'all_items'             => 'All Deer Tests',
        'search_items'          => 'Search Deer Tests',
        'parent_item_colon'     => 'Parent Deer Tests:',
        'not_found'             => 'No Deer Tests found.',
        'not_found_in_trash'    => 'No Deer Tests found in Trash.',
    ];
    
    $args = [
        'labels'                => $labels,
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite'               => ['slug' => 'deer-tests'],
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'menu_position'         => null,
        'supports'              => ['title', 'thumbnail', 'excerpt', 'comments', 'revisions', 'custom-fields', 'page-attributes'],
        'menu_icon'             => 'dashicons-buddicons-buddypress-logo',
        'show_in_rest'          => true,
        'taxonomies'            => ['deer_tests_category'],
    ];
    
    register_post_type('deer_tests', $args);
}
add_action('init', 'create_deer_tests_post_type');


function create_deer_tests_taxonomy() {
    $labels = [
        'name'              => 'Deer Tests Categories',
        'singular_name'     => 'Deer Tests Category',
        'search_items'      => 'Search Deer Tests Categories',
        'all_items'         => 'All Deer Tests Categories',
        'parent_item'       => 'Parent Category',
        'parent_item_colon' => 'Parent Category:',
        'edit_item'         => 'Edit Category',
        'update_item'       => 'Update Category',
        'add_new_item'      => 'Add New Category',
        'new_item_name'     => 'New Category Name',
        'menu_name'         => 'Deer Tests Categories',
    ];

    $args = [
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'deer-tests-category'],
        'show_in_rest'      => true,
    ];

    register_taxonomy('deer_tests_category', ['deer_tests'], $args);
}
add_action('init', 'create_deer_tests_taxonomy');