<?php if (!defined('ABSPATH')) exit;?>
<div class="row">
    <div class="col-xl-9 col-lg-8 col-12">
        <div class="blog-page-title">
            <h1>
                نتایج حاصل از جستجو برای <?php echo esc_html( get_search_query( false ) ); ?>
            </h1>
        </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-12">
        <div class="blog-page-search">
            <form action="<?php bloginfo('url'); ?>">
                <input type="text" placeholder="برای جستجو تایپ کنید..." name="s" />
                <button type="submit">
                    <div class="icon"></div>
                </button>
            </form>
        </div>
    </div>
</div>