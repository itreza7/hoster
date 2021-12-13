<?php
    if (!defined('ABSPATH')) exit;
    /* Template Name:  صفحه اصلی */
    get_header();
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?php the_content(''); ?>
            </div>
        </div>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>