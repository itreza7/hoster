<?php
    if (!defined('ABSPATH')) exit;
    if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Please do not load this page directly. Thanks!');
    if (post_password_required()) return;
?>
<div class="comments">
    <div class="header">
        <div class="row">
            <div class="col-sm-6 col-12">
                <div class="post-addition-title">نظرات کاربران</div>
            </div>
            <div class="col-sm-6 col-12">
                <span class="show-comment-form">ارسال دیدگاه</span>
            </div>
        </div>
        <div class="comment-form">
            <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
                <div class="row justify-content-center">
                    <?php if(is_user_logged_in()): $user = wp_get_current_user();?>
                        <input type="hidden" name="author" id="author" value="<?php echo $user->data->user_nicename;?>"/>
                        <input type="hidden" name="email" id="email" value="<?php echo $user->data->user_email;?>"/>
                    <?php else:?>
                    <div class="col-sm-6 col-12">
                        <input type="text" placeholder="نام شما..." name="author" id="author" value="<?php echo $comment_author; ?>">
                    </div>
                    <div class="col-sm-6 col-12">
                        <input type="email" placeholder="پست الکترونیک شما..." name="email" id="email" value="<?php echo $comment_author_email; ?>">
                    </div>
                    <?php endif;?>
                    <div class="col-12">
                        <textarea placeholder="متن نظر ... " name="comment" id="comment" rows="5"></textarea>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <input class="submit-comment" name="submit" type="submit" id="submit" value="ثبت نظر">
                    </div>
                </div>
                <?php comment_id_fields(); ?>
                <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>"/>
                <input type="hidden" name="url" value="#"/>
                <?php do_action('comment_form', $post->ID); ?>
            </form>
        </div>
    </div>
    <div class="main">
        <ul>
            <?php if (have_comments()) : wp_list_comments('callback=hoster_comment_list'); endif; ?>
        </ul>
    </div>
</div>