<?php if (!defined('ABSPATH')) exit;?>
<header class="top-of-site">
    <div class="bg-img">
        <div class="overlayer"></div>
    </div>
    <div class="container">
        <div class="pt-4 pb-4">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="top-navbar-menu">
                        <?php wp_nav_menu(array('theme_location' => 'head-menu', 'menu_class' => 'head-menu')); ?>
                        <p>
                            <?php if (get_field('phone_number', 'option')): ?>
                                <span class="tel">شماره تماس: <?php the_field('phone_number', 'option'); ?></span>
                            <?php endif; ?>
                            <?php if (get_field('register_number', 'option')): ?>
                                <span class="co">شماره ثبت شرکت : <?php the_field('register_number', 'option'); ?></span>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <?php if (get_field('support_online', 'option')): ?>
                        <div class="top-support">
                            <div class="bg-circle hvr-ripple-out" data-toggle="modal" data-target="#loginModal">
                                <i class="fas fa-user"></i>
                            </div>
                            <a href="<?php the_field('support_online', 'option'); ?>">
                            <div class="btn-support hvr-ripple-out">
                                <div class="text">
                                    <p>پشتیبانی <span>آنلاین</span></p>
                                    <p class="link">برای ارسال پیام کلیک کنید.</p>
                                </div>
                                <div class="sup"></div>
                            </div>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="closebg" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="close">&times;</span>
                        </div>
                        <div class="logo">
                            <img src="<?php echo get_field('company_logo','option') ? get_field('company_logo','option')['sizes']['logo-login'] : ''; ?>" alt="<?php bloginfo('name'); ?>"/>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form method="post"
                              action="<?php the_field('whmcs_url', 'option'); ?>dologin.php"
                              role="form">
                            <input type="email" name="username" placeholder="ایمیل را وارد کنید..." autofocus>
                            <input type="password" name="password" placeholder="کلمه عبور را وارد کنید..."
                                   autocomplete="off">
                            <input id="login" type="submit" class="btn btn-primary" value="وارد شوید"/>
                            <p>
                                <a href="<?php the_field('whmcs_url', 'option'); ?>register.php">ساخت
                                    حساب
                                    کاربری</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>