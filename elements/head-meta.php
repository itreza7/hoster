<?php if (!defined('ABSPATH')) exit;?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <?php
    if(get_field('google-console' , 'option')):
        $google = get_field('google-console' , 'option');
        echo '<meta name="google-site-verification" content="'.$google.'" />'."\n";
    endif;
    if(have_rows('site-keywords','option')):
        $keywords = array();
        while( have_rows('site-keywords','option')): the_row();
            $keywords[] = get_sub_field('keyword');
        endwhile;
        echo '	<meta name="keywords" content="'.implode(",",$keywords).'">'."\n";
    endif;
    if(get_field('site-description' , 'option')):
        $description = get_field('site-description' , 'option');
        echo '	<meta name="description" content="'.$description.'" />'."\n";
    endif;
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php if(is_home() || is_page_template('homepage')){
            the_field('site-title' , 'option');
        }elseif(is_category()){
            single_cat_title();
            echo ' - ';
            the_field('site-title' , 'option');
        }elseif(is_single()){
            single_post_title();
            echo ' - ';
            the_field('site-title' , 'option');
        }elseif(is_page()){
            single_post_title();
            echo ' - ';
            the_field('site-title' , 'option');
        }else{
            wp_title('' , true);
        } ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_site_url(); ?>/favicon.ico" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>