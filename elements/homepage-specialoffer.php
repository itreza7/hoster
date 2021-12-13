<?php if (!defined('ABSPATH')) exit;?>
<?php if (get_field('special_status', 'option')): ?>
    <div class="col-lg-4 col-12">
        <div class="offer" data-aos="fade-down" data-aos-duration="1000">
            <div class="gift"></div>
            <div class="title">پیشنهاد <span>ویژه</span></div>
            <div class="expire">تا <span><?php
                        $timestamp = strtotime(get_field('so-expire', 'option'));
                        if(function_exists('larateam_hoster_jdate')) echo larateam_hoster_jdate('Y/m/d', $timestamp);
                        else echo date('Y/m/d', $timestamp);
                    ?></span></div>
            <p class="price"><span><?php the_field('so-price', 'option'); ?></span>،000</p>
            <p class="vahed">تومان / <?php the_field('so-period', 'option'); ?></p>
            <p class="bar"><?php the_field('so-titr', 'option'); ?></p>
            <ul>
                <?php if (have_rows('so-desc', 'option')): while (have_rows('so-desc', 'option')) : the_row(); ?>
                    <li><?php the_sub_field('icon'); ?><?php the_sub_field('text'); ?></li>
                <?php endwhile;endif; ?>
            </ul>
            <a href="<?php the_field('so-url', 'option'); ?>">
                <p class="buy hvr-ripple-out">مشاهده جزئیات و خرید آنلاین</p>
            </a>
        </div>
    </div>
<?php endif; ?>