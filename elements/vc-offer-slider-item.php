<?php if (!defined('ABSPATH')) exit;?>
<?php $timestamp = strtotime($args['date']);if(time() < $timestamp) :?>
<div class="item">
    <div class="row">
        <div class="col-sm-4 col-12">
            <div class="col-right">
                <div class="discount">
                    <div class="img"></div>
                </div>
                <div class="percent"><span><?php echo $args['percent'] ?? ''; ?>%</span></div>
                <div class="description"><span><?php echo $args['target'] ?? ''; ?></span></div>
                <div class="code"><span><?php echo $args['code'] ?? ''; ?></span></div>
            </div>
        </div>
        <div class="col-sm-8 col-12">
            <div class="col-left">
                <div class="headoff">
                    <div class="row">
                        <div class="col-sm-6 col-12">
                            <div class="title">تخفیف ویژه</div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="expire">انقضا <?php
                                    if(function_exists('larateam_hoster_jdate')) echo larateam_hoster_jdate('Y/m/d', $timestamp);
                                    else echo date('Y/m/d', $timestamp);
                                ?></div>
                        </div>
                    </div>
                </div>
                <div class="name"><?php echo $args['title'] ?? ''; ?></div>
                <div class="description">
                    <ul>
                        <?php if(isset($args['field1'])):?>
                        <li>
                            <div class="row">
                                <div class="col-6">
                                    <div class="att"><?php echo $args['field1']; ?></div>
                                </div>
                                <div class="col-6">
                                    <div class="value"><?php echo $args['vfield1'] ?? ''; ?></div>
                                </div>
                            </div>
                        </li>
                        <?php endif;?>
                        <?php if(isset($args['field2'])):?>
                        <li>
                            <div class="row">
                                <div class="col-6">
                                    <div class="att"><?php echo $args['field2']; ?></div>
                                </div>
                                <div class="col-6">
                                    <div class="value"><?php echo $args['vfield2'] ?? ''; ?></div>
                                </div>
                            </div>
                        </li>
                        <?php endif;?>
                        <?php if(isset($args['field3'])):?>
                        <li>
                            <div class="row">
                                <div class="col-6">
                                    <div class="att"><?php echo $args['field3']; ?></div>
                                </div>
                                <div class="col-6">
                                    <div class="value"><?php echo $args['vfield3'] ?? ''; ?></div>
                                </div>
                            </div>
                        </li>
                        <?php endif;?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <a href="<?php echo $args['url'] ?? ''; ?>">
        <div class="buybtn">مشاهده محصول</div>
    </a>
</div>
<?php endif;?>