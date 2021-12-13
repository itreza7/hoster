<?php if (!defined('ABSPATH')) exit;?>
<div class="whyus row" data-aos="zoom-in" data-aos-duration="750">
    <div class="col-4 icon"><img src="<?php echo wp_get_attachment_image_src($args['image'] ?? '')[0] ?>" alt="<?php echo $args['title'] ?? '';?>" width="64px" height="64px"/>
    </div>
    <div class="col-8 text">
        <div class="title" style="color:<?php echo $args['color'] ?? '';?>"><?php echo $args['title'] ?? '';?></div>
        <p><?php echo $args['text'] ?? '';?></p>
    </div>
</div>