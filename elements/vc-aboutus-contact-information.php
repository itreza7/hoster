<?php if (!defined('ABSPATH')) exit;?>
<div class="contact-information">
    <div class="row">
        <?php if (!empty($args['phonenumber'])): ?>
            <div class="col-md-6 col-12">
                <div class="telephone">
                    <span class="label">تلفن تماس:</span>
                    <span class="value"><?php echo $args['phonenumber']; ?></span>
                </div>
            </div>
        <?php endif; ?>
        <?php if (!empty($args['phonenumber'])): ?>
            <div class="col-md-6 col-12">
                <div class="email">
                    <span class="label">ایمیل:</span>
                    <span class="value"><?php echo $args['email']; ?></span>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <?php if (!empty($args['address'])): ?>
        <div class="address">
            <span class="label">آدرس:</span>
            <span class="value"><?php echo $args['address']; ?></span>
        </div>
    <?php endif; ?>
</div>