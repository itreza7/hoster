<?php if (!defined('ABSPATH')) exit;?>
<?php if(get_field('blog_type','option') === 'row'):?>
<div class="col-12">
    <div class="row-post">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-4 col-sm-6 col-9">
                <div class="thumbnail">
                    <a href="<?php the_permalink() ?>"> <?php if (has_post_thumbnail()): the_post_thumbnail('archive-thumbnail', ['title' => get_the_title()]); endif; ?></a>
                </div>
            </div>
            <div class="col-md-8 col-12">
                <h3 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                <div class="post-content">
                    <?php the_excerpt(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php else: ?>
<div class="col-xl-4 col-md-6 col-12">
    <div class="grid-post">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-12 col-sm-6 col-9">
                <div class="thumbnail">
                    <a href="<?php the_permalink() ?>"> <?php if (has_post_thumbnail()): the_post_thumbnail('archive-thumbnail', ['title' => get_the_title()]); endif; ?></a>
                </div>
            </div>
            <div class="col-12">
                <h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                <div class="post-content">
                    <?php the_excerpt(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif;?>
