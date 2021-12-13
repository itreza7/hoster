<?php if (!defined('ABSPATH')) exit;?>
<div class="related-post">
    <div class="post-addition-title">مطالب مرتبط</div>
    <div class="post-main">
        <div class="post-archive">
            <div class="row">
                <?php
                    $related = get_posts([
                        'category__in' => wp_get_post_categories($post->ID),
                        'orderby' => 'rand',
                        'numberposts' => 3,
                        'post__not_in' => [$post->ID]
                    ]);
                    if ($related) foreach ($related as $post):
                        setup_postdata($post);
                        ?>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="grid-post">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-md-12 col-sm-6 col-9">
                                        <div class="thumbnail">
                                            <a href="<?php the_permalink() ?>"> <?php if (has_post_thumbnail()): the_post_thumbnail('related-thumbnail', ['title' => get_the_title()]); endif; ?></a>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <h2 class="post-title"><a
                                                    href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                                        <div class="post-content">
                                            <?php the_hoster_excerpt(22,$post->id) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;
                    wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</div>