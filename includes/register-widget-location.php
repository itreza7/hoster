<?php
    if (!defined('ABSPATH')) exit;

    function larateam_hoster_widget_one_init() {

        register_sidebar( array(
            'name'          => 'سایدبار وبلاگ',
            'id'            => 'hoster_blog_sidebar',
            'before_widget' => '<div class="box">',
            'after_widget'  => '</div></div>',
            'before_title'  => '<div class="headingTitle"><p>',
            'after_title'   => '</p></div><div class="data">',
        ) );

    }
    add_action( 'widgets_init', 'larateam_hoster_widget_one_init' );