<?php if (!defined('ABSPATH')) exit; get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="post-main">
                    <div class="post-single">
                        <?php get_template_part('elements/blog', 'post-single'); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>