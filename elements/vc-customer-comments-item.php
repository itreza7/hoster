<?php if (!defined('ABSPATH')) exit;?>
<div class="item">
    <div class="icon">
        <div class="img"></div>
    </div>
    <div class="comment"><p><?php echo $args['comment']; ?></p></div>
    <div class="user">
        <div class="row">
            <div class="col-sm-6 col-12">
                <div class="name"><span>نام مشتری : </span><?php echo $args['name']; ?></div>
            </div>
            <div class="col-sm-6 col-12">
                <div class="site"><?php echo $args['url']; ?></div>
            </div>
        </div>
    </div>
</div>