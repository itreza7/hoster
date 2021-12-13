<?php if (!defined('ABSPATH')) exit;?>
<div class="post-main">
    <div class="post-archive">
        <?php if (have_posts()) : ?>
            <div class="row">
                <?php
                    while (have_posts()) : the_post();
                    get_template_part('elements/blog','post-list-item');
                    endwhile;
                ?>
                <div class="col-12">
                    <?php hoster_pagination();?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>