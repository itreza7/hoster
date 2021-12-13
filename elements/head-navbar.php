<?php if (!defined('ABSPATH')) exit;?>
<nav class="navbar" id="navbar">
    <div class="row position-relative">
        <div class="col-lg-3 col-sm-6 col-10">
            <div class="left">
                <div class="logo">
                    <a href="<?php echo get_home_url(); ?>">
                        <img src="<?php echo get_field('company_logo','option') ? get_field('company_logo','option')['sizes']['logo-navbar'] : ''; ?>"
                             alt="<?php bloginfo('name'); ?>"/>
                    </a>
                </div>
                <div class="title">
                    <?php if (is_front_page()): ?>
                        <h1 class="site-title">
                            <?php the_field('company_name', 'option'); ?>
                        </h1>
                        <h2 class="site-desc">
                            <?php the_field('company_summary', 'option'); ?>
                        </h2>
                    <?php else: ?>
                        <h2 class="site-title">
                            <?php the_field('company_name', 'option'); ?>
                        </h2>
                        <p class="site-desc">
                            <?php the_field('company_summary', 'option'); ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-sm-6 col-2">
            <div class="menu" id="topnav">
                <?php wp_nav_menu(array('theme_location' => 'header-menu', 'menu_class' => 'header-menu')); ?>
                <span class="openResponsiveMenu"><i class="icon"></i></span>
                <div class="responsiveMenu overlay">
                    <div class="overlay-content">
                        <?php wp_nav_menu(array('theme_location' => 'responsive-menu' , 'menu_class' => 'responsive-menu')); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>