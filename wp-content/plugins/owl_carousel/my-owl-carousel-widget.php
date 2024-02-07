<?php
/*
Plugin Name: Custom Carousel Widget
Description: A custom Elementor widget to control owl carousel.
Version: 1.0
Author: UnitsSoftware Company
*/

// Ensure WordPress environment
if (!defined('ABSPATH')) {
    exit;
}

// Load Elementor widget class
add_action('elementor/widgets/widgets_registered', 'load_custom_carousel_widget');
function load_custom_carousel_widget()
{
    require_once(plugin_dir_path(__FILE__) . 'function.php');
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Custom_Carousel_Widget());
}

// Enqueue styles
function custom_carousel_styles()
{
    wp_enqueue_style('owl-carousel', plugins_url('css/owl.carousel.min.css', __FILE__));
    wp_enqueue_style('owl-theme-default', plugins_url('css/owl.theme.default.min.css', __FILE__));
    wp_enqueue_style('main', plugins_url('css/main.css', __FILE__));
    wp_enqueue_style('font', plugins_url('css/all.min.css', __FILE__));


}
add_action('wp_enqueue_scripts', 'custom_carousel_styles');

// Enqueue scripts
function custom_carousel_scripts() {
    // Enqueue jQuery
    wp_enqueue_script('jquery');

    // Enqueue owl-carousel script with jQuery as a dependency
    wp_enqueue_script('owl-carousel', plugins_url('js/owl.carousel.min.js', __FILE__), array('jquery'), '1.0.0', true);

    // Enqueue your app.js script with jQuery as a dependency
    wp_enqueue_script('app', plugins_url('js/app.js', __FILE__), array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'custom_carousel_scripts');
