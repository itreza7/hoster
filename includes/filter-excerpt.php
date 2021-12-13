<?php
    if (!defined('ABSPATH')) exit;

    if (function_exists('get_field') && get_field('blog_type', 'option') === 'grid') {
        add_filter('excerpt_length', function ($length) {
            return 20;
        }, 999);
    }

    add_filter('excerpt_more', function () {
        return '...';
    });

    function get_hoster_excerpt($limit, $post_id)
    {
        $excerpt = explode(' ', get_the_excerpt($post_id), $limit);
        if (count($excerpt) >= $limit) {
            array_pop($excerpt);
            $excerpt = implode(" ", $excerpt) . '...';
        } else {
            $excerpt = implode(" ", $excerpt);
        }
        $excerpt = preg_replace('`[[^]]*]`', '', $excerpt);
        return $excerpt;
    }

    function the_hoster_excerpt($limit, $post_id)
    {
        echo '<p>'.get_hoster_excerpt($limit, $post_id).'</p>';
    }