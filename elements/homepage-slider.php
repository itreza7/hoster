<?php if (!defined('ABSPATH')) exit;?>
<div class="<?php echo get_field('special_status', 'option') ? 'col-lg-8 col-12' : 'col-lg-12 col-12';?> sd">
    <div class="slider">
        <?php putRevSlider('rd7'); ?>
    </div>
    <?php get_template_part('elements/homepage','domain-search');?>
</div>