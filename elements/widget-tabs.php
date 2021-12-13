<?php if (!defined('ABSPATH')) exit;?>
<div class="box">
    <div class="article-tabs">
        <div class="three-select">
            <div class="row">
                <div class="col-4">
                    <span data-target="#popularPosts">محبوبترین</span>
                </div>
                <div class="col-4">
                    <span data-target="#lastsPosts">آخرین ها</span>
                </div>
                <div class="col-4">
                    <span data-target="#randomPosts">پیشنهادی</span>
                </div>
            </div>
        </div>
        <div class="tabs-content">
            <div id="popularPosts" class="tab-content">
                <div class="post-list">
                    <?php $popularpost = new WP_Query(array('posts_per_page' => intval($args['number']), 'meta_key' => 'views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'));
                        while ($popularpost->have_posts()) : $popularpost->the_post();
                            get_template_part('elements/widget','tabs-post');
                        endwhile; ?>
                </div>
            </div>
            <div id="lastsPosts" class="tab-content">
                <div class="post-list">
                    <ul>
                        <?php $recent = new WP_Query("orderby=date&showposts=".intval($args['number']));
                            while ($recent->have_posts()) : $recent->the_post();
                            get_template_part('elements/widget','tabs-post');
                            endwhile; ?>
                    </ul>
                </div>
            </div>
            <div id="randomPosts" class="tab-content">
                <div class="post-list">
                    <ul>
                        <?php
                            $recent = new WP_Query("orderby=rand&showposts=".intval($args['number']));
                            while ($recent->have_posts()) : $recent->the_post();
                            get_template_part('elements/widget','tabs-post');
                            endwhile;
                            ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>