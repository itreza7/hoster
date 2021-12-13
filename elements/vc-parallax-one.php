<?php if (!defined('ABSPATH')) exit;?>
<div class="parallax-hoster-one" style="background-image: url('<?php echo wp_get_attachment_image_src($args['background'] ?? '','full')[0] ?>');">
    <div class="parallax-one-overlayer" style="background: <?php echo $args['background_color'];?>;"></div>
    <div class="container">
        <?php echo do_shortcode(wptexturize($args['content']));?>
    </div>
</div>