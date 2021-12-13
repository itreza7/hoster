<?php if (have_rows('packagelist')): ?>
    <div class="row package-list <?php if(!$args['center']) echo 'justify-content-md-start';?> justify-content-center">
        <?php while (have_rows('packagelist')) : the_row(); ?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 col-12">
                <div class="package-item <?php if (get_sub_field('has_offerp')) echo "offer";?>">
                    <div class="top">
                        <div class="title"><?php the_sub_field('nickname'); ?></div>
                        <?php if (get_sub_field('has_offerp')): ?>
                            <div class="price"><span
                                        class="bp"><?php echo number_format(get_sub_field('price')); ?></span><?php echo number_format(get_sub_field('price') * (100 - get_sub_field('offer_precent')) / 100); ?>
                                <span class="period">تومان/<?php the_sub_field('period'); ?></span></div>
                        <?php else: ?>
                            <div class="price"><?php echo number_format(get_sub_field('price')); ?><span
                                        class="period">تومان/<?php the_sub_field('period'); ?></span></div>
                        <?php endif; ?>
                        <div class="shape shape-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="#FFFFFF">
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
                                        <div class="right">کد تخفیف <?php the_sub_field('offer_precent'); ?>%:</div>
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
        <?php endwhile; ?>
    </div>
<?php endif; ?>