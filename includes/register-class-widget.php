<?php

    if (!defined('ABSPATH')) exit;

    final class LarateamHosterCategoryWidget extends WP_Widget
    {
        public function __construct()
        {

            parent::__construct(
                'larateam-hoster-category-widget',
                'دسته بندی های هاستر'
            );

        }

        public function widget($args, $instance)
        {
            $args = array_merge([
                'title' => apply_filters('widget_title', $instance['title']),
                'show_empty' => $instance['show_empty']
            ],$args);
            get_template_part('elements/widget', 'category', $args);

        }

        public function form($instance)
        {

            $title = !empty($instance['title']) ? $instance['title'] : '';
            $show_empty = !empty($instance['show_empty']) ? $instance['show_empty'] : '';
            ?>
            <p>
                <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">عنوان ابزارک</label>
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>"
                       name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text"
                       value="<?php echo esc_attr($title); ?>">
            </p>
            <p>
                <label for="<?php echo esc_attr($this->get_field_id('show_empty')); ?>">نمایش دسته بندی های خالی</label>
                <input id="<?php echo esc_attr($this->get_field_id('show_empty')); ?>"
                       name="<?php echo esc_attr($this->get_field_name('show_empty')); ?>" type="checkbox"
                       value="1"<?php if($show_empty == '1') echo ' checked';?>>
            </p>
            <?php

        }

        public function update($new_instance, $old_instance)
        {

            $instance = [];

            $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
            $instance['show_empty'] = (!empty($new_instance['show_empty'])) ? strip_tags($new_instance['show_empty']) : '';

            return $instance;
        }

    }

    final class LarateamHosterTabsWidget extends WP_Widget
    {
        public function __construct()
        {

            parent::__construct(
                'larateam-hoster-tabs-widget',
                'تب نمایش مطالب هاستر'
            );

        }

        public function widget($args, $instance)
        {
            $args = array_merge([
                'number' => $instance['number'],
            ],$args);
            get_template_part('elements/widget', 'tabs', $args);

        }

        public function form($instance)
        {

            $number = !empty($instance['number']) ? $instance['number'] : '';
            ?>
            <p>
                <label for="<?php echo esc_attr($this->get_field_id('number')); ?>">تعداد مطالب</label>
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('number')); ?>"
                       name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="number"
                       value="<?php echo esc_attr($number); ?>">
            </p>
            <?php

        }

        public function update($new_instance, $old_instance)
        {

            $instance = [];

            $instance['number'] = (!empty($new_instance['number'])) ? strip_tags($new_instance['number']) : '';

            return $instance;
        }

    }

    final class LarateamHosterHTMLWidget extends WP_Widget
    {
        public function __construct()
        {

            parent::__construct(
                'larateam-hoster-html-widget',
                'نمایش کد HTML بدون باکس هاستر'
            );

        }

        public function widget($args, $instance)
        {
            $args = array_merge([
                'html_code' => base64_decode($instance['html_code']),
            ],$args);
            get_template_part('elements/widget', 'html', $args);

        }

        public function form($instance)
        {
            $html_code = !empty($instance['html_code']) ? base64_decode($instance['html_code']) : '';
            ?>
            <p>
                <label for="<?php echo esc_attr($this->get_field_id('html_code')); ?>">کد HTMl</label>
                <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('html_code')); ?>"
                       name="<?php echo esc_attr($this->get_field_name('html_code')); ?>" rows="8" dir="ltr" class="text-left"><?php echo esc_attr($html_code); ?></textarea>
            </p>
            <?php
        }

        public function update($new_instance, $old_instance)
        {

            $instance = [];

            $instance['html_code'] = (!empty($new_instance['html_code'])) ? base64_encode($new_instance['html_code']) : '';

            return $instance;
        }

    }


    add_action('widgets_init', function () {
        register_widget('LarateamHosterCategoryWidget');
        register_widget('LarateamHosterTabsWidget');
        register_widget('LarateamHosterHTMLWidget');
    });