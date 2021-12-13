<?php
    if (!defined('ABSPATH')) exit;

    add_filter('get_the_archive_title', function ($title) {
        if (is_category()) {
            $title = single_cat_title('', false);
        }
        elseif (is_tag()) {
            $title = single_tag_title('', false);
        }
        elseif (is_author()) {
            $title = get_the_author();
        }
        elseif (is_tax()) {
            $title = sprintf(__('%1$s'), single_term_title('', false));
        }
        elseif (is_post_type_archive()) {
            $title = post_type_archive_title('', false);
        }
        return $title;
    });