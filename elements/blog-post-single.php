<?php if (!defined('ABSPATH')) exit;?>
<div class="thumbnail">
    <?php if (has_post_thumbnail()) the_post_thumbnail('single-thumbnail', array('title' => get_the_title())); ?>
</div>
<div class="share">
    <div class="row">
        <div class="col-xl-6 col-sm-8 col-12">
            <div class="shortlink">
                <p>لینک اشتراک کوتاه: <span><?php echo site_url(); ?>/?p=<?php echo get_the_ID(); ?></span></p>
            </div>
        </div>
        <div class="col-xl-6 col-sm-4 col-12">
            <div class="social">
                <a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>">
                    <div class="icon gplus">
                        <i class="fab fa-google-plus    "></i>
                    </div>
                </a>
                <a target="_blank"
                   href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>">
                    <div class="icon facebook">
                        <i class="fab fa-facebook"></i>
                    </div>
                </a>
                <a target="_blank"
                   href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>">
                    <div class="icon twitter">
                        <i class="fab fa-twitter"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <?php the_content(''); ?>
</div>
<?php comments_template(); ?>
<?php get_template_part('elements/blog','post-single-related');?>
