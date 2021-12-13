<?php if (!defined('ABSPATH')) exit;?>
<div class="box">
    <div class="headingTitle">
        <p><?php echo $args['title']; ?></p>
    </div>
    <div class="data">
        <div class="row category">
            <?php foreach (get_terms(array('taxonomy' => 'category', 'hide_empty' => $args['show_empty'] !== '1')) as $term): ?>
                <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                    <a href="<?php echo get_term_link($term->term_id); ?>"<?php if(is_category($term->term_id)) echo ' class="active"';?>><?php echo $term->name; ?></a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>