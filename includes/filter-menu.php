<?php
    if (!defined('ABSPATH')) exit;

    add_filter('walker_nav_menu_start_el', 'larateam_hoster_add_menu_id', 10, 4);
    function larateam_hoster_add_menu_id($item_output, $item, $depth, $args)
    {
        global $rezadev_id;
        $rezadev_id = __($item->ID);
        return $item_output;
    }

    add_filter('wp_nav_menu_objects', 'larateam_hoster_nav_menu_objects', 10, 2);
    function larateam_hoster_nav_menu_objects($items, $args)
    {
        foreach ($items as &$item) {
            $icon = get_field('icon', $item);
            if ($icon) {
                $item->title = $icon . $item->title;
            }
        }
        return $items;
    }


    function larateam_hoster_get_menu_by_location($location)
    {
        if (empty($location))
            return false;
        $locations = get_nav_menu_locations();
        if (!isset($locations[$location]))
            return false;
        $menu_obj = get_term($locations[$location], 'nav_menu');
        return $menu_obj;
    }