<?php if (!defined('ABSPATH')) exit;?>
<div class="error-404">
    <div class="row flex-wrap-reverse">
        <div class="col-xl-6 col-12">
            <div class="text">
                <h1>هشدار 404 داریم.</h1>
                <h2>گشتیم چیزی پیدا نشد :)</h2>
                <div class="menu">
                    <a href="<?php bloginfo('url'); ?>">صفحه اصلی</a>
                    <?php if (get_field('smartsearch', 'option')): ?>
                        <a class="center" href="<?php echo get_field('smartsearch', 'option'); ?>">جستجوی هوشمند</a>
                    <?php endif; ?>
                    <?php if (get_field('clientarea', 'option')): ?>
                        <a href="<?php echo get_permalink(get_field('clientarea', 'option')); ?>">ناحیه کاربری</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-21">
            <div class="jet">
                <div class="img"><span id="plane" /></div>
            </div>
        </div>
    </div>
</div>