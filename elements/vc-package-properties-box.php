<?php if (!defined('ABSPATH')) exit;?>
<div class="package-properties-box" style="background: <?php echo $args['color'];?>">
    <div class="title" style="color: <?php echo $args['title_color'];?>"><?php echo $args['title'];?></div>
    <div class="close"></div>
    <div class="content">
        <?php echo do_shortcode($args['content']);?>
    </div>
</div>