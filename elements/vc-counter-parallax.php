<?php if (!defined('ABSPATH')) exit;?>
<div class="row numcounter">
    <div class="col-4">
        <p><span class="numscroller"><?php echo $args['number1'] ?? '';?></span><br /><?php echo wordwrap($args['title1'] ?? '',1,"<br />\n");?></p>
    </div>
    <div class="col-4">
        <p><span class="numscroller"><?php echo $args['number2'] ?? '';?></span><br /><?php echo wordwrap($args['title2'] ?? '',1,"<br />\n");?></p>
    </div>
    <div class="col-4">
        <p><span class="numscroller"><?php echo $args['number3'] ?? '';?></span><br /><?php echo wordwrap($args['title3'] ?? '',1,"<br />\n");?></p>
    </div>
</div>