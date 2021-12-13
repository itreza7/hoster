<?php
    if (!defined('ABSPATH')) exit;

    function larateam_hoster_enqueue()
    {
        wp_enqueue_style('aos', get_template_directory_uri() . '/assets/css/aos.css');
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', ['aos']);
        wp_enqueue_style('bootstrap-rtl', get_template_directory_uri() . '/assets/css/bootstrap-rtl.min.css', ['bootstrap', 'aos']);
        wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', ['bootstrap', 'bootstrap-rtl', 'aos']);
        wp_enqueue_style('primary', get_template_directory_uri() . '/assets/css/style.css', ['bootstrap', 'bootstrap-rtl', 'aos', 'font-awesome']);
        wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/custom.css', ['bootstrap', 'bootstrap-rtl', 'aos', 'font-awesome', 'primary']);
    
        wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', ['jquery'], false, true);
        wp_enqueue_script('aos', get_template_directory_uri() . '/assets/js/aos.js', ['jquery'], false, true);
        wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.js', ['jquery'], false, true);
        wp_enqueue_script('jquery-CounterUp', get_template_directory_uri() . '/assets/js/jquery.counterup.js', ['jquery', 'waypoints'], false, true);
        wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', ['jquery'], false, true);
        if (is_404()) wp_enqueue_script('404-page', get_template_directory_uri() . '/assets/js/404.js', ['jquery'], false, true);
        wp_enqueue_script('primary', get_stylesheet_directory_uri() . '/assets/js/rezadev.js', ['jquery'], false, true);
        wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', ['jquery'], false, true);
    }

    add_action('wp_enqueue_scripts', 'larateam_hoster_enqueue');