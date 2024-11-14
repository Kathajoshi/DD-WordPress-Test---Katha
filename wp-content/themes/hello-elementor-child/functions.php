<?php
// Enqueue Parent and Child Theme Styles
function hello_elementor_child_enqueue_styles() {
    wp_enqueue_style('hello-elementor', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('hello-elementor-child', get_stylesheet_directory_uri() . '/style.css', ['hello-elementor']);
}
add_action('wp_enqueue_scripts', 'hello_elementor_child_enqueue_styles');


function enqueue_custom_css() {
    // Enqueue a custom CSS file
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/css/custom-style.css', [], '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_css');


// Include a custom PHP file from a child theme
require_once get_stylesheet_directory() . '/inc/deer-tests.php';


function enable_classic_editor_for_deer_tests($use_block_editor, $post_type) {
    if ($post_type === 'deer_tests') {
        return false; 
    }
    return $use_block_editor;
}
add_filter('use_block_editor_for_post_type', 'enable_classic_editor_for_deer_tests', 10, 2);