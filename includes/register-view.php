<?php

    if (!defined('ABSPATH')) exit;

    function hoster_register_view()
    {
        if (is_single() && ($postID = get_the_ID()) && is_integer($postID) && $postID != 0)  {
            $count_key = 'views_count';
            $count = get_post_meta($postID, $count_key, true);
            if ($count == '') {
                add_post_meta($postID, $count_key, 0);
            }
            else {
                $count++;
                update_post_meta($postID, $count_key, $count);
            }
        }
    }

    add_action('template_redirect', 'hoster_register_view');