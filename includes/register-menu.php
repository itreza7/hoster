<?php
    if (!defined('ABSPATH')) exit;

    add_action('init', 'register_my_menu');
function register_my_menu()
{
    register_nav_menu('head-menu', __('منوی بالای سایت'));
    register_nav_menu('header-menu', __('ناوبار اصلی'));
    register_nav_menu('footer1-menu', __('منوی فوتر 1'));
    register_nav_menu('footer2-menu', __('منوی فوتر 2'));
    register_nav_menu('footer3-menu', __('منوی فوتر 3'));
    register_nav_menu('responsive-menu', __('منوی حالت رسپانسیو'));
}