<?php
    if (!defined('ABSPATH')) exit;

    get_template_part('includes/plugin', 'mega-menu');
    get_template_part('includes/plugin', 'acf');
    get_template_part('includes/register-class', 'tgm');
    get_template_part('includes/register-class', 'larateam');
    get_template_part('includes/register-class', 'vc');
    get_template_part('includes/register-class', 'widget');
    get_template_part('includes/register', 'jdf');
    get_template_part('includes/register', 'enqueue');
    get_template_part('includes/register', 'menu');
    get_template_part('includes/register', 'package');
    get_template_part('includes/register', 'image-size');
    get_template_part('includes/register', 'widget-location');
    get_template_part('includes/register', 'pagination');
    get_template_part('includes/register', 'view');
    get_template_part('includes/register', 'comment');
    get_template_part('includes/filter', 'excerpt');
    get_template_part('includes/filter', 'archive-title');
    get_template_part('includes/filter', '404-redirect');
    get_template_part('includes/filter', 'menu');