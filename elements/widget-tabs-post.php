<?php if (!defined('ABSPATH')) exit;?>
<div class="post-row">
    <div class="row align-middle">
        <div class="col-8">
            <div class="text">
                <p class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
                <div class="desc">
                    <?php the_hoster_excerpt(22,$post->id); ?>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="thumbnail">
                <a href="<?php the_permalink() ?>"><?php if (has_post_thumbnail()): the_post_thumbnail('sidebar-thumbnail', array('title' => get_the_title())); endif; ?></a>
            </div>
        </div>
    </div>
</div>