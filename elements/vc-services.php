<?php if (!defined('ABSPATH')) exit;?>
<div class="our-services-column">
    <div class="details">
        <div class="icon"><?php echo wp_get_attachment_image($args['image'] ?? '','services'); ?></div>
        <div class="title"><h3><?php echo $args['title'] ?? ''; ?></h3></div>
        <div class="price"><p><?php echo $args['subtitle'] ?? ''; ?></p></div>
        <a class="sss">
            <div class="btn-buy"><?php echo $args['continue'] ?? '';?></div>
        </a>
    </div>
    <div class="subservice">
        <div class="top">
            <div class="row">
                <div class="col-4">
                    <div class="icon"><?php echo wp_get_attachment_image($args['image'] ?? '','services2'); ?></div>
                </div>
                <div class="col-8">
                    <div class="tit"><?php echo $args['title'] ?? ''; ?></div>
                </div>
            </div>
        </div>
        <?php echo $args['content'] ?? ''; ?>
        <div class="closesub"></div>
    </div>
</div>