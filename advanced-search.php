<?php
    /* Template Name: جستجوی هوشمند */
    if (!defined('ABSPATH')) exit;
    get_header();
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="container">
        <div class="page-content">
            <?php the_content(); ?>
        </div>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>