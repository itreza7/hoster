<?php
    if (!defined('ABSPATH')) exit;

    function hoster_comment_list($comment, $args, $depth)
    {
        $GLOBALS['comment'] = $comment;
        ?>
    <li <?php comment_class(); ?>>
        <div class="comment-section">
            <div class="row">
                <div class="col-md-2 col-sm-4 col-12">
                    <div class="avatar">
                        <?php echo get_avatar($comment, 67); ?>
                    </div>
                    <p class="name"><?php echo get_comment_author_link(); ?></p>
                </div>
                <div class="col-md-10 col-sm-8 col-12">
                    <div class="text">
                        <?php comment_text(); ?>
                    </div>
                    <div class="time">
                        <p><?php printf(_x('%s &#1662;&#1740;&#1588;', '%s = human-readable time difference', 'your-text-domain'), human_time_diff(get_comment_time('U'), current_time('timestamp'))); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <?php
    }
