<?php
    if (!defined('ABSPATH')) exit;

    function hoster_redirect_to_404() {
        if(( is_search() && !have_posts() ) || is_post_type_archive( 'package' ) ) {
            global $wp_query;
            $wp_query->set_404();
            status_header( 404 );
            get_template_part( 404 );
            exit();
        }
    }
    add_action( 'template_redirect', 'hoster_redirect_to_404' );