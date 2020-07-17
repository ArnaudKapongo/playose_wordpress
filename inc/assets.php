<?php 
add_action('wp_enqueue_scripts', function() {

    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
    $rand = rand(1, 99999999999999999999);
    wp_enqueue_style('fix', get_stylesheet_uri(), '', $rand); 
    wp_enqueue_style('font', get_template_directory_uri() . '/assets/fontawesome/css/all.min.css');
    
    
    wp_enqueue_script('lightsliderjs', get_stylesheet_directory_uri() . '/assets/js/lightslider.js', array('jquery'), '1.0.0', true);
});