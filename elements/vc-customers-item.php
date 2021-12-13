<?php if (!defined('ABSPATH')) exit;?>
<div class="item">
    <div class="avatar"><?php echo wp_get_attachment_image($args['image'] ?? '','customerlogo'); ?></div>
    <div class="shadow"></div>
    <div class="name"><?php echo $args['name'] ?? '';?></div>
</div>