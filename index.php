<?php
    if (!defined('ABSPATH')) exit;
    get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php get_template_part('elements/blog', 'post-list'); ?>
            </div>
            <div class="col-lg-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>