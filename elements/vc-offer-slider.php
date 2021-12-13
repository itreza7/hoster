<?php if (!defined('ABSPATH')) exit;?>
<div class="offer-slider">
    <div class="grandright"></div>
    <div class="grandleft"></div>
    <div class="loop owl-carousel owl-theme">
        <?php echo do_shortcode(wptexturize($args['content']));?>
    </div>
</div>