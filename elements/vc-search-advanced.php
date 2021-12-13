<?php if (!defined('ABSPATH')) exit;?>
<form id="filterService" type="post" name="filterService">
    <div class="search-box">
        <div class="row">
            <div class="col-xl-20 col-md-6">
                <div class="country">
                    <div class="title">کشور میزبانی</div>
                    <div class="row">
                        <div class="col-3">
                            <input type="radio" id="germany" data-form="country" name="filterCountry" value="germany">
                            <label for="germany"><span class="germany"></span></label>
                        </div>
                        <div class="col-3">
                            <input type="radio" id="france" data-form="country" name="filterCountry" value="france">
                            <label for="france"><span class="france"></span></label>
                        </div>
                        <div class="col-3">
                            <input type="radio" id="usa" data-form="country" name="filterCountry" value="usa">
                            <label for="usa"><span class="usa"></span></label>
                        </div>
                        <div class="col-3">
                            <input type="radio" id="iran" data-form="country" name="filterCountry" value="iran">
                            <label for="iran"><span class="iran"></span></label>
                        </div>
                        <div class="col-3">
                            <input type="radio" id="uk" data-form="country" name="filterCountry" value="uk">
                            <label for="uk"><span class="uk"></span></label>
                        </div>
                        <div class="col-3">
                            <input type="radio" id="netherlands" data-form="country" name="filterCountry" value="netherlands">
                            <label for="netherlands"><span class="netherlands"></span></label>
                        </div>
                        <div class="col-3">
                            <input type="radio" id="canada" data-form="country" name="filterCountry" value="canada">
                            <label for="canada"><span class="canada"></span></label>
                        </div>
                        <div class="col-3">
                            <input type="radio" id="other" data-form="country" name="filterCountry" value="other">
                            <label for="other"><span class="other"></span></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-20 col-md-6">
                <div class="kind general">
                    <div class="title">وضعیت منابع</div>
                    <div class="choose">
                        <div class="row">
                            <div class="col-6">
                                <input type="radio" id="deduct" data-form="kind" name="filterKind" value="deduct">
                                <label for="deduct"><span>اختصاصی</span></label>
                            </div>
                            <div class="col-6">
                                <input type="radio" id="normal" data-form="kind" name="filterKind" value="normal">
                                <label for="normal"><span>عادی</span></label>
                            </div>
                            <div class="col-12">
                                <input type="radio" id="pre-deduct" data-form="kind" name="filterKind" value="pre-deduct">
                                <label for="pre-deduct" class="full"><span>نیمه اختصاصی</span></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-20 col-md-6">
                <div class="os general">
                    <div class="title">نوع سرویس</div>
                    <div class="choose">
                        <div class="row">
                            <div class="col-6">
                                <input type="radio" id="host" data-form="os" name="filterOS" value="host">
                                <label for="host"><span>هاست</span></label>
                            </div>
                            <div class="col-6">
                                <input type="radio" id="reseller" data-form="os" name="filterOS" value="reseller">
                                <label for="reseller"><span>رسیلر</span></label>
                            </div>
                            <div class="col-12">
                                <input type="radio" id="dserver" data-form="os" name="filterOS" value="dserver">
                                <label for="dserver" class="full"><span>سرور اختصاصی</span></label>
                            </div>
                            <div class="col-12">
                                <input type="radio" id="vps" data-form="os" name="filterOS" value="vps">
                                <label for="vps" class="full"><span>سرور مجازی</span></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-20 col-md-6">
                <div class="cp general">
                    <div class="title">کنترل پنل</div>
                    <div class="choose">
                        <div class="row">
                            <div class="col-6">
                                <input type="radio" id="cpanel" data-form="cp" name="filterCP" value="cpanel">
                                <label for="cpanel"><span>سی پنل</span></label>
                            </div>
                            <div class="col-6">
                                <input type="radio" id="directadmin" data-form="cp" name="filterCP" value="directadmin">
                                <label for="directadmin"><span>دایرکت ادمین</span></label>
                            </div>
                            <div class="col-6">
                                <input type="radio" id="plesk" data-form="cp" name="filterCP" value="plesk">
                                <label for="plesk"><span>پلسک</span></label>
                            </div>
                            <div class="col-6">
                                <input type="radio" id="windows" data-form="cp" name="filterCP" value="windows">
                                <label for="windows"><span>ویندوز</span></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-20 col-12">
                <div class="submit">
                    <p>سیستم به صورت خودکار بر حسب لیست انتخابی موارد را برای شما لیست می کند. جهت اجرا بر روی دکمه زیر
                        کلیک کنید.</p>
                    <button type="submit" id="search">تایید و جستجو</button>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="package">
    <div id="filterResult">
        <div id="search-advanced-result">
            <div class="search-title-result">پکیج های مورد نظر شما</div>
        </div>
        <div class="row package-list justify-content-md-start justify-content-center">
            <?php
                $query = new WP_Query(['post_type' => 'package', 'posts_per_page' => '-1']);
                while ($query->have_posts()) : $query->the_post();
                    if (have_rows('packagelist')):
                        while (have_rows('packagelist')) : the_row();
                            ?>
                            <div class="col-item col-xl-3 col-lg-4 col-md-6 col-sm-8 col-12"
                                 data-country="<?php the_sub_field('country'); ?>"
                                 data-kind="<?php the_sub_field('resource'); ?>"
                                 data-cp="<?php the_sub_field('cp'); ?>"
                                 data-os="<?php the_sub_field('kind'); ?>">
                                <div class="package-item <?php if (get_sub_field('has_offerp')) echo "offer"; ?>">
                                    <div class="top">
                                        <div class="title"><?php the_sub_field('nickname'); ?></div>
                                        <?php if (get_sub_field('has_offerp')): ?>
                                            <div class="price"><span
                                                        class="bp"><?php echo number_format(get_sub_field('price')); ?></span><?php echo number_format(get_sub_field('price') * (100 - get_sub_field('offer_precent')) / 100); ?>
                                                <span class="period">تومان/<?php the_sub_field('period'); ?></span>
                                            </div>
                                        <?php else: ?>
                                            <div class="price"><?php echo number_format(get_sub_field('price')); ?><span
                                                        class="period">تومان/<?php the_sub_field('period'); ?></span>
                                            </div>
                                        <?php endif; ?>
                                        <div class="shape shape-bottom">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100"
                                                 preserveAspectRatio="none" fill="#FFFFFF">
                                                <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
        c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
        c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <ul>
                                            <?php if (have_rows('desc')):while (have_rows('desc')) : the_row(); ?>
                                                <li><?php the_sub_field('icon'); ?><?php the_sub_field('text'); ?></li>
                                            <?php endwhile;endif; ?>
                                        </ul>
                                        <?php if (get_sub_field('has_offerp')): ?>
                                            <div class="offercode">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="right">کد
                                                            تخفیف <?php the_sub_field('offer_precent'); ?>
                                                            %:
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="left"><?php the_sub_field('offer_code'); ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <a href="<?php the_sub_field('link'); ?>">
                                        <div class="bottom hvr-ripple-out">
                                            <div class="buy">خرید و تحویل فوری</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php
                        endwhile;
                    endif;
                endwhile;
                wp_reset_postdata();
            ?>
        </div>
    </div>
</div>