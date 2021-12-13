<?php
    /* Template Name:  قالب عرض کامل */
    if (!defined('ABSPATH')) exit;
    get_header();
    ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="container-fluid">
        <div class="page-content">
            <?php the_content(''); ?>
        </div>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>