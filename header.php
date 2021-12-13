<?php
    if (!defined('ABSPATH')) exit;
    get_template_part('elements/head', 'meta');
    get_template_part('elements/head', 'uppernavbar');
    get_template_part('elements/head', 'navbar');

    if (is_front_page()) get_template_part('elements/homepage', 'underheader');
    elseif (is_home()) get_template_part('elements/blog', 'underheader');
    elseif (is_archive()) get_template_part('elements/archive', 'underheader');
    elseif (is_search()) get_template_part('elements/search', 'underheader');
    elseif (is_page_template('advanced-search.php')) get_template_part('elements/advanced-search', 'underheader');
    elseif (is_page()) get_template_part('elements/page', 'underheader');
    elseif (is_singular('package')) get_template_part('elements/package', 'underheader');
    elseif (is_single()) get_template_part('elements/post', 'underheader');
    elseif (is_404()) get_template_part('elements/404', 'underheader');

    get_template_part('elements/head', 'end');
