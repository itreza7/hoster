<?php if (!defined('ABSPATH')) exit;?>
<div class="package-underheader">
    <div class="row align-items-center flex-wrap-reverse">
        <div class="col-lg-9 col-12">
            <div class="package-title">
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="content">
                <?php the_field('text_under_navbar_package'); ?>
            </div>
        </div>
        <div class="col-lg-3 col-12">
            <div class="icon">
                <?php if (has_post_thumbnail()): the_post_thumbnail('page-thumbnail'); endif; ?>
            </div>
        </div>
    </div>
</div>