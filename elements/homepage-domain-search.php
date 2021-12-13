<?php if (!defined('ABSPATH')) exit;?>
<?php if(get_field('searchdomain_status', 'option')):?>
    <div class="domain">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="price">
                    <div class="row justify-content-center">
                        <?php if(get_field('first_domain_homepage', 'option')):?>
                            <div class="col-3">
                                <div class="border red">
                                    <span class="name"><?php echo get_field('first_domain_homepage', 'option')['suffix']; ?>.</span><br/>
                                    <?php echo get_field('first_domain_homepage', 'option')['price']; ?> ت
                                </div>
                            </div>
                        <?php endif;?>
                        <?php if(get_field('second_domain_homepage', 'option')):?>
                            <div class="col-3">
                                <div class="border blue">
                                    <span class="name"><?php echo get_field('second_domain_homepage', 'option')['suffix']; ?>.</span><br/>
                                    <?php echo get_field('second_domain_homepage', 'option')['price']; ?> ت
                                </div>
                            </div>
                        <?php endif;?>
                        <?php if(get_field('third_domain_homepage', 'option')):?>
                            <div class="col-3">
                                <div class="border green">
                                    <span class="name"><?php echo get_field('third_domain_homepage', 'option')['suffix']; ?>.</span><br/>
                                    <?php echo get_field('third_domain_homepage', 'option')['price']; ?> ت
                                </div>
                            </div>
                        <?php endif;?>
                        <?php if(get_field('forth_domain_homepage', 'option')):?>
                            <div class="col-3">
                                <div class="border black">
                                    <span class="name"><?php echo get_field('forth_domain_homepage', 'option')['suffix']; ?>.</span><br/>
                                    <?php echo get_field('forth_domain_homepage', 'option')['price']; ?> ت
                                </div>
                            </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <form target="_blank"
                      action="<?php the_field('whmcs_url', 'option'); ?>cart.php?a=add&domain=register"
                      method="post"
                      class="form-inline">
                    <div class="form">
                        <div class="row">
                            <div class="col-12">
                                <div class="logo"></div>
                                <input type="hidden" name="direct" value="true">
                                <input class="name" id="domainchecker" type="text" name="query"
                                       placeholder="نام دامنه انتخابی شما">
                                <button type="submit">
                                    <i class="fal fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endif;?>