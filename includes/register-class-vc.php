<?php

    if (!defined('ABSPATH')) exit;
    

    if (class_exists('WPBakeryShortCodesContainer')) {
        class WPBakeryShortCode_vc_hoster_offer extends WPBakeryShortCodesContainer
        {
        }

        class WPBakeryShortCode_vc_hoster_parallax_one extends WPBakeryShortCodesContainer
        {
        }

        class WPBakeryShortCode_vc_hoster_customers extends WPBakeryShortCodesContainer
        {
        }

        class WPBakeryShortCode_vc_hoster_customer_comments extends WPBakeryShortCodesContainer
        {
        }

        class WPBakeryShortCode_vc_hoster_package_properties_box extends WPBakeryShortCodesContainer
        {
        }
    }

    final class LarateamHosterVC
    {
        private static $instance = null;

        public static function get()
        {
            if (self::$instance == null) {
                self::$instance = new self();
            }

            return self::$instance;
        }

        private function __construct()
        {
            add_action('after_setup_theme', [$this, 'vc_hoster_services_vc_map']);
            add_action('after_setup_theme', [$this, 'vc_hoster_whyus_vc_map']);
            add_action('after_setup_theme', [$this, 'vc_hoster_offer_slider_vc_map']);
            add_action('after_setup_theme', [$this, 'vc_hoster_offer_item_vc_map']);
            add_action('after_setup_theme', [$this, 'vc_hoster_homepage_title_one_vc_map']);
            add_action('after_setup_theme', [$this, 'vc_hoster_parallax_one_vc_map']);
            add_action('after_setup_theme', [$this, 'vc_hoster_counter_parallax_vc_map']);
            add_action('after_setup_theme', [$this, 'vc_hoster_customers_vc_map']);
            add_action('after_setup_theme', [$this, 'vc_hoster_customers_item_vc_map']);
            add_action('after_setup_theme', [$this, 'vc_hoster_customer_comments_vc_map']);
            add_action('after_setup_theme', [$this, 'vc_hoster_customer_comments_item_vc_map']);
            add_action('after_setup_theme', [$this, 'vc_hoster_homepage_title_two_vc_map']);
            add_action('after_setup_theme', [$this, 'vc_hoster_aboutus_title_three_vc_map']);
            add_action('after_setup_theme', [$this, 'vc_hoster_aboutus_contact_information_vc_map']);
            add_action('after_setup_theme', [$this, 'vc_hoster_package_list_vc_map']);
            add_action('after_setup_theme', [$this, 'vc_hoster_package_facilities_vc_map']);
            add_action('after_setup_theme', [$this, 'vc_hoster_package_properties_box_vc_map']);
            add_action('after_setup_theme', [$this, 'vc_hoster_search_advanced_vc_map']);

            add_shortcode('vc_hoster_services', [$this, 'vc_hoster_services_render']);
            add_shortcode('vc_hoster_whyus', [$this, 'vc_hoster_whyus_render']);
            add_shortcode('vc_hoster_offer', [$this, 'vc_hoster_offer_slider_render']);
            add_shortcode('vc_hoster_offer_item', [$this, 'vc_hoster_offer_item_render']);
            add_shortcode('vc_hoster_homepage_title_one', [$this, 'vc_hoster_homepage_title_one_render']);
            add_shortcode('vc_hoster_parallax_one', [$this, 'vc_hoster_parallax_one_render']);
            add_shortcode('vc_hoster_counter_parallax', [$this, 'vc_hoster_counter_parallax_render']);
            add_shortcode('vc_hoster_customers', [$this, 'vc_hoster_customers_render']);
            add_shortcode('vc_hoster_customers_item', [$this, 'vc_hoster_customers_item_render']);
            add_shortcode('vc_hoster_customer_comments', [$this, 'vc_hoster_customer_comments_render']);
            add_shortcode('vc_hoster_customer_comments_item', [$this, 'vc_hoster_customer_comments_item_render']);
            add_shortcode('vc_hoster_homepage_title_two', [$this, 'vc_hoster_homepage_title_two_render']);
            add_shortcode('vc_hoster_aboutus_title_three', [$this, 'vc_hoster_aboutus_title_three_render']);
            add_shortcode('vc_hoster_aboutus_contact_information', [$this, 'vc_hoster_aboutus_contact_information_render']);
            add_shortcode('vc_hoster_package_list', [$this, 'vc_hoster_package_list_render']);
            add_shortcode('vc_hoster_package_facilities', [$this, 'vc_hoster_package_facilities_render']);
            add_shortcode('vc_hoster_package_properties_box', [$this, 'vc_hoster_package_properties_box_render']);
            add_shortcode('vc_hoster_search_advanced', [$this, 'vc_hoster_search_advanced_render']);
        }

        public function vc_hoster_whyus_vc_map()
        {
            return vc_map([
                'name' => 'چرا انتخاب ما',
                'base' => 'vc_hoster_whyus',
                'description' => '',
                'category' => 'Hoster',
                'class' => '',
                'icon' => get_template_directory_uri() . '/assets/images/logo.png',
                'show_settings_on_create' => true,
                'params' => [
                    [
                        "type" => "attach_image",
                        "heading" => 'تصویر',
                        "param_name" => "image",
                        "description" => 'تصویر را انتخاب کنید.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => 'عنوان',
                        "admin_label" => true,
                        "param_name" => "title",
                        "description" => 'عنوان را وارد کنید.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => 'متن',
                        "param_name" => "text",
                        "description" => 'متن را وارد کنید.'
                    ],
                    [
                        "type" => "colorpicker",
                        "heading" => 'رنگ',
                        "param_name" => "color",
                        "description" => 'رنگ را انتخاب کنید.'
                    ]
                ]
            ]);
        }

        public function vc_hoster_services_vc_map()
        {
            return vc_map(array(
                'name' => 'خدمات ما',
                'base' => 'vc_hoster_services',
                'description' => '',
                'category' => 'Hoster',
                'icon' => get_template_directory_uri() . '/assets/images/logo.png',
                'show_settings_on_create' => true,
                'params' => [
                    [
                        "type" => "attach_image",
                        "heading" => 'تصویر',
                        "param_name" => "image",
                        "description" => 'تصویر را انتخاب کنید.'
                    ],
                    [
                        "type" => "textfield",
                        "holder" => "",
                        "admin_label" => true,
                        "heading" => 'عنوان بخش',
                        "param_name" => "title",
                        "description" => 'عنوان این بخش را وارد کنید.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => 'زیر عنوان بخش',
                        "param_name" => "subtitle",
                        "description" => 'زیر عنوان این بخش را وارد کنید.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => 'متن مشاهده کامل',
                        "param_name" => "continue",
                        "description" => 'متن مشاهده کامل را وارد کنید.'
                    ],
                    [
                        "type" => "textarea_html",
                        "heading" => 'لینک های بخش',
                        "param_name" => "content",
                        "description" => 'لینک های این بخش را به صورت بولت وارد کنید.'
                    ],
                ]
            ));
        }

        public function vc_hoster_homepage_title_one_vc_map()
        {
            return vc_map([
                'name' => 'عنوان ویژه یک',
                'base' => 'vc_hoster_homepage_title_one',
                'description' => '',
                'category' => 'Hoster',
                'class' => '',
                'icon' => get_template_directory_uri() . '/assets/images/logo.png',
                'show_settings_on_create' => true,
                'params' => [
                    [
                        "type" => "textfield",
                        "holder" => "",
                        "admin_label" => true,
                        "heading" => 'عنوان',
                        "param_name" => "title",
                        "description" => 'عنوان را وارد کنید.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => 'زیر عنوان',
                        "param_name" => "subtitle",
                        "description" => 'زیر عنوان را وارد کنید.'
                    ],
                ]
            ]);
        }

        public function vc_hoster_offer_slider_vc_map()
        {
            return vc_map([
                'name' => 'اسلایدر تخفیف هاستر',
                'base' => 'vc_hoster_offer',
                "admin_label" => true,
                'description' => '',
                'category' => 'Hoster',
                'icon' => get_template_directory_uri() . '/assets/images/logo.png',
                "content_element" => true,
                "is_container" => true,
                'show_settings_on_create' => false,
                "as_parent" => ['only' => 'vc_hoster_offer_item'],
                "js_view" => 'VcColumnView',
                "params" => [

                ],
            ]);

        }

        public function vc_hoster_offer_item_vc_map()
        {
            return vc_map([
                'name' => 'آیتم اسلایدر تخفیف هاستر',
                'base' => 'vc_hoster_offer_item',
                "admin_label" => true,
                'description' => '',
                'category' => 'Hoster',
                'icon' => get_template_directory_uri() . '/assets/images/logo.png',
                "as_child" => ['only' => 'vc_hoster_offer'],
                'show_settings_on_create' => true,
                'params' => [
                    [
                        "type" => "textfield",
                        "heading" => 'عنوان',
                        "admin_label" => true,
                        "param_name" => "title",
                        "description" => 'عنوان را وارد کنید.',
                    ],
                    [
                        "type" => "textfield",
                        "heading" => 'کد تخفیف',
                        "param_name" => "code",
                        "description" => 'کد تخفیف را وارد کنید.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => 'تاریخ انقضا',
                        "param_name" => "date",
                        "description" => 'تاریخ انقضا را بصورت Y/d/m وارد کنید.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => 'درصد تخفیف',
                        "param_name" => "percent",
                        "description" => 'درصد تخفیف را وارد کنید.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => 'جامعه هدف',
                        "param_name" => "target",
                        "description" => 'این تخفیف برای چه دسته از کاربران است؟'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => 'لینک محصول',
                        "param_name" => "url",
                        "description" => 'لینک محصول را وارد کنید.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => 'فیلد اول',
                        "param_name" => "field1",
                        "description" => 'فیلد اول را وارد کنید.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => 'مقدار فیلد اول',
                        "param_name" => "vfield1",
                        "description" => 'مقدار فیلد اول را وارد کنید.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => 'فیلد دوم',
                        "param_name" => "field2",
                        "description" => 'فیلد دوم را وارد کنید.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => 'مقدار فیلد دوم',
                        "param_name" => "vfield2",
                        "description" => 'مقدار فیلد دوم را وارد کنید.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => 'فیلد سوم',
                        "param_name" => "field3",
                        "description" => 'فیلد سوم را وارد کنید.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => 'مقدار فیلد سوم',
                        "param_name" => "vfield3",
                        "description" => 'مقدار فیلد سوم را وارد کنید.'
                    ],
                ]
            ]);
        }

        public function vc_hoster_parallax_one_vc_map()
        {
            return vc_map([
                'name' => 'پارالاکس هاستر یک',
                'base' => 'vc_hoster_parallax_one',
                "admin_label" => true,
                'description' => '',
                'category' => 'Hoster',
                'icon' => get_template_directory_uri() . '/assets/images/logo.png',
                "content_element" => true,
                "is_container" => true,
                'show_settings_on_create' => false,
                "js_view" => 'VcColumnView',
                "params" => [
                    [
                        "admin_label" => true,
                        "type" => "attach_image",
                        "heading" => 'تصویر پس زمینه',
                        "param_name" => "background",
                        "description" => 'تصویر را پس زمینه را انتخاب کنید.'
                    ],
                    [
                        "type" => "colorpicker",
                        "heading" => 'رنگ زمینه',
                        "param_name" => "background_color",
                        "description" => 'رنگ پس زمینه را انتخاب کنید.'
                    ],
                ],
            ]);
        }

        public function vc_hoster_counter_parallax_vc_map()
        {
            return vc_map([
                'name' => 'شمارنده پارالاکس',
                'base' => 'vc_hoster_counter_parallax',
                "admin_label" => true,
                'description' => '',
                'category' => 'Hoster',
                'icon' => get_template_directory_uri() . '/assets/images/logo.png',
                'show_settings_on_create' => true,
                'params' => [
                    [
                        "type" => "textfield",
                        "heading" => 'عنوان شمارنده اول',
                        "admin_label" => true,
                        "param_name" => "title1",
                        "description" => 'عنوان شمارنده اول را وارد کنید.',
                    ],
                    [
                        "type" => "textfield",
                        "heading" => 'عدد شمارنده اول',
                        "param_name" => "number1",
                        "description" => 'عدد شمارنده اول را وارد کنید.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => 'عنوان شمارنده دوم',
                        "admin_label" => true,
                        "param_name" => "title2",
                        "description" => 'عنوان شمارنده دوم را وارد کنید.',
                    ],
                    [
                        "type" => "textfield",
                        "heading" => 'عدد شمارنده دوم',
                        "param_name" => "number2",
                        "description" => 'عدد شمارنده دوم را وارد کنید.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => 'عنوان شمارنده سوم',
                        "admin_label" => true,
                        "param_name" => "title3",
                        "description" => 'عنوان شمارنده سوم را وارد کنید.',
                    ],
                    [
                        "type" => "textfield",
                        "heading" => 'عدد شمارنده سوم',
                        "param_name" => "number3",
                        "description" => 'عدد شمارنده سوم را وارد کنید.'
                    ],
                ]
            ]);
        }

        public function vc_hoster_customers_vc_map()
        {
            return vc_map([
                'name' => 'مشتریان',
                'base' => 'vc_hoster_customers',
                "admin_label" => true,
                'description' => '',
                'category' => 'Hoster',
                'icon' => get_template_directory_uri() . '/assets/images/logo.png',
                "content_element" => true,
                "is_container" => true,
                'show_settings_on_create' => false,
                "as_parent" => ['only' => 'vc_hoster_customers_item'],
                "js_view" => 'VcColumnView',
                'params' => [

                ]
            ]);
        }

        public function vc_hoster_customers_item_vc_map()
        {
            return vc_map([
                'name' => 'آیتم اسلایدر مشتریان',
                'base' => 'vc_hoster_customers_item',
                "admin_label" => true,
                'description' => '',
                'category' => 'Hoster',
                'icon' => get_template_directory_uri() . '/assets/images/logo.png',
                "as_child" => ['only' => 'vc_hoster_customers'],
                'show_settings_on_create' => true,
                'params' => [
                    [
                        "type" => "attach_image",
                        "heading" => 'لوگو مشتری',
                        "param_name" => "image",
                        "description" => 'لوگو مشتری را انتخاب کنید.'
                    ],
                    [
                        "type" => "textfield",
                        "admin_label" => true,
                        "heading" => 'نام مشتری',
                        "param_name" => "name",
                        "description" => 'نام مشتری را وارد کنید.'
                    ],
                ]
            ]);
        }

        public function vc_hoster_customer_comments_vc_map()
        {
            return vc_map([
                'name' => 'نظرات مشتریان',
                'base' => 'vc_hoster_customer_comments',
                "admin_label" => true,
                'description' => '',
                'category' => 'Hoster',
                'icon' => get_template_directory_uri() . '/assets/images/logo.png',
                "content_element" => true,
                "is_container" => true,
                'show_settings_on_create' => false,
                "as_parent" => ['only' => 'vc_hoster_customer_comments_item'],
                "js_view" => 'VcColumnView',
                'params' => [

                ]
            ]);
        }

        public function vc_hoster_customer_comments_item_vc_map()
        {
            return vc_map([
                'name' => 'آیتم اسلایدر نظرات مشتریان',
                'base' => 'vc_hoster_customer_comments_item',
                "admin_label" => true,
                'description' => '',
                'category' => 'Hoster',
                'icon' => get_template_directory_uri() . '/assets/images/logo.png',
                "as_child" => ['only' => 'vc_hoster_customer_comments'],
                'show_settings_on_create' => true,
                'params' => [
                    [
                        "type" => "textfield",
                        "admin_label" => true,
                        "heading" => 'نام مشتری',
                        "param_name" => "name",
                        "description" => 'نام مشتری را وارد کنید.'
                    ],
                    [
                        "type" => "textarea",
                        "heading" => 'نظر',
                        "param_name" => "comment",
                        "description" => 'نظر مشتری را وارد کنید.'
                    ],
                    [
                        "type" => "textarea",
                        "heading" => 'آدرس سایت',
                        "param_name" => "url",
                        "description" => 'آدرس سایت مشتری را وارد کنید.'
                    ],
                ]
            ]);
        }

        public function vc_hoster_homepage_title_two_vc_map()
        {
            return vc_map([
                'name' => 'عنوان ویژه دو',
                'base' => 'vc_hoster_homepage_title_two',
                'description' => '',
                'category' => 'Hoster',
                'class' => '',
                'icon' => get_template_directory_uri() . '/assets/images/logo.png',
                'show_settings_on_create' => true,
                'params' => [
                    [
                        "type" => "textfield",
                        "holder" => "",
                        "admin_label" => true,
                        "heading" => 'عنوان',
                        "param_name" => "title",
                        "description" => 'عنوان را وارد کنید.'
                    ],
                ]
            ]);
        }

        public function vc_hoster_aboutus_title_three_vc_map()
        {
            return vc_map([
                'name' => 'عنوان ویژه سه',
                'base' => 'vc_hoster_aboutus_title_three',
                'description' => '',
                'category' => 'Hoster',
                'class' => '',
                'icon' => get_template_directory_uri() . '/assets/images/logo.png',
                'show_settings_on_create' => true,
                'params' => [
                    [
                        "type" => "textfield",
                        "holder" => "",
                        "admin_label" => true,
                        "heading" => 'عنوان',
                        "param_name" => "title",
                        "description" => 'عنوان را وارد کنید.'
                    ],
                ]
            ]);
        }

        public function vc_hoster_aboutus_contact_information_vc_map()
        {
            return vc_map([
                'name' => 'اطلاعات تماس هاستر',
                'base' => 'vc_hoster_aboutus_contact_information',
                'description' => '',
                'category' => 'Hoster',
                'class' => '',
                'icon' => get_template_directory_uri() . '/assets/images/logo.png',
                'show_settings_on_create' => true,
                'params' => [
                    [
                        "type" => "textfield",
                        "holder" => "",
                        "admin_label" => true,
                        "heading" => 'تلفن تماس',
                        "param_name" => "phonenumber",
                        "description" => 'تلفن تماس را وارد کنید.'
                    ],
                    [
                        "type" => "textfield",
                        "holder" => "",
                        "admin_label" => true,
                        "heading" => 'ایمیل',
                        "param_name" => "email",
                        "description" => 'ایمیل را وارد کنید.'
                    ],
                    [
                        "type" => "textarea",
                        "holder" => "",
                        "admin_label" => true,
                        "heading" => 'آدرس',
                        "param_name" => "address",
                        "description" => 'آدرس را وارد کنید.'
                    ],
                ]
            ]);
        }

        public function vc_hoster_package_list_vc_map()
        {
            return vc_map([
                'name' => 'لیست پکیج های هاستر',
                'base' => 'vc_hoster_package_list',
                'description' => 'از این المان فقط در بخش پکیج های قالب هاستینگ هاستر استفاده کنید.',
                'category' => 'Hoster',
                'class' => '',
                'icon' => get_template_directory_uri() . '/assets/images/logo.png',
                'show_settings_on_create' => true,
                'params' => [
                    [
                        "type" => "checkbox",
                        "holder" => "",
                        "admin_label" => true,
                        "heading" => 'وسط چین',
                        "param_name" => "center",
                        "description" => 'پکیج ها وسط چین باشند؟'
                    ],
                ]
            ]);
        }

        public function vc_hoster_package_facilities_vc_map()
        {
            return vc_map([
                'name' => 'امکان اضافی صفحه پکیج ها',
                'base' => 'vc_hoster_package_facilities',
                'description' => '',
                'category' => 'Hoster',
                'class' => '',
                'icon' => get_template_directory_uri() . '/assets/images/logo.png',
                'show_settings_on_create' => true,
                'params' => [
                    [
                        "type" => "textfield",
                        "holder" => "",
                        "admin_label" => true,
                        "heading" => 'عنوان',
                        "param_name" => "title",
                        "description" => 'عنوان را وارد کنید.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => 'قیمت',
                        "param_name" => "price",
                        "description" => 'قیمت را وارد کنید.'
                    ],
                ]
            ]);
        }

        public function vc_hoster_package_properties_box_vc_map()
        {
            return vc_map([
                'name' => 'باکس رنگی ویژگی های محصول',
                'base' => 'vc_hoster_package_properties_box',
                'description' => '',
                'category' => 'Hoster',
                'class' => '',
                'icon' => get_template_directory_uri() . '/assets/images/logo.png',
                "content_element" => true,
                "is_container" => true,
                'show_settings_on_create' => true,
                "js_view" => 'VcColumnView',
                'params' => [
                    [
                        "type" => "textfield",
                        "holder" => "",
                        "admin_label" => true,
                        "heading" => 'عنوان',
                        "param_name" => "title",
                        "description" => 'عنوان را وارد کنید.'
                    ],
                    [
                        "type" => "colorpicker",
                        "heading" => 'رنگ',
                        "param_name" => "color",
                        "description" => 'رنگ زمینه باکس را انتخاب کنید.'
                    ],
                    [
                        "type" => "colorpicker",
                        "heading" => 'رنگ عنوان',
                        "param_name" => "title_color",
                        "description" => 'رنگ عنوان باکس را انتخاب کنید.'
                    ],
                ]
            ]);
        }

        public function vc_hoster_search_advanced_vc_map()
        {
            return vc_map([
                'name' => 'جستجوگر ویژه پکیج های هاستر',
                'base' => 'vc_hoster_search_advanced',
                'description' => '',
                'category' => 'Hoster',
                'class' => '',
                'icon' => get_template_directory_uri() . '/assets/images/logo.png',
                'show_settings_on_create' => true,
                'params' => [
                ]
            ]);
        }


        public function vc_hoster_whyus_render($args, $content = null)
        {
            $args = shortcode_atts([
                'image' => 0,
                'text' => '',
                'title' => '',
                'color' => '',
                'content' => $content,
            ], $args);

            ob_start();
            get_template_part('elements/vc', 'whyus', $args);
            $output = ob_get_contents();
            ob_end_clean();
            return $output;
        }

        public function vc_hoster_services_render($args, $content = null)
        {
            $args = shortcode_atts([
                'image' => 0,
                'title' => '',
                'subtitle' => '',
                'continue' => '',
                'content' => $content,
            ], $args);

            ob_start();
            get_template_part('elements/vc', 'services', $args);
            $output = ob_get_contents();
            ob_end_clean();
            return $output;
        }

        public function vc_hoster_homepage_title_one_render($args, $content = null)
        {
            $args = shortcode_atts([
                'title' => '',
                'subtitle' => '',
                'content' => $content,
            ], $args);

            ob_start();
            get_template_part('elements/vc', 'homepage-title-one', $args);
            $output = ob_get_contents();
            ob_end_clean();
            return $output;
        }

        public function vc_hoster_offer_slider_render($args, $content = null)
        {
            $args = shortcode_atts([
                'content' => $content,
            ], $args);

            ob_start();
            get_template_part('elements/vc', 'offer-slider', $args);
            $output = ob_get_contents();
            ob_end_clean();
            return $output;
        }

        public function vc_hoster_offer_item_render($args, $content = null)
        {
            $args = shortcode_atts([
                'date' => '',
                'percent' => 0,
                'target' => '',
                'code' => '',
                'title' => '',
                'url' => '',
                'field1' => '',
                'vfield1' => '',
                'field2' => '',
                'vfield2' => '',
                'field3' => '',
                'vfield3' => '',
                'content' => $content,
            ], $args);

            ob_start();
            get_template_part('elements/vc', 'offer-slider-item', $args);
            $output = ob_get_contents();
            ob_end_clean();
            return $output;
        }

        public function vc_hoster_parallax_one_render($args, $content = null)
        {
            $args = shortcode_atts([
                'background' => 0,
                'background_color' => '',
                'content' => $content,
            ], $args);

            ob_start();
            get_template_part('elements/vc', 'parallax-one', $args);
            $output = ob_get_contents();
            ob_end_clean();
            return $output;
        }

        public function vc_hoster_counter_parallax_render($args, $content = null)
        {
            $args = shortcode_atts([
                'title1' => '',
                'number1' => '',
                'title2' => '',
                'number2' => '',
                'title3' => '',
                'number3' => '',
                'content' => $content,
            ], $args);

            ob_start();
            get_template_part('elements/vc', 'counter-parallax', $args);
            $output = ob_get_contents();
            ob_end_clean();
            return $output;
        }

        public function vc_hoster_customers_render($args, $content = null)
        {
            $args = shortcode_atts([
                'title1' => '',
                'number1' => '',
                'title2' => '',
                'number2' => '',
                'title3' => '',
                'number3' => '',
                'content' => $content,
            ], $args);

            ob_start();
            get_template_part('elements/vc', 'customers', $args);
            $output = ob_get_contents();
            ob_end_clean();
            return $output;
        }

        public function vc_hoster_customers_item_render($args, $content = null)
        {
            $args = shortcode_atts([
                'image' => 0,
                'name' => '',
                'content' => $content,
            ], $args);

            ob_start();
            get_template_part('elements/vc', 'customers-item', $args);
            $output = ob_get_contents();
            ob_end_clean();
            return $output;
        }

        public function vc_hoster_customer_comments_render($args, $content = null)
        {
            $args = shortcode_atts([
                'content' => $content,
            ], $args);

            ob_start();
            get_template_part('elements/vc', 'customer-comments', $args);
            $output = ob_get_contents();
            ob_end_clean();
            return $output;
        }

        public function vc_hoster_customer_comments_item_render($args, $content = null)
        {
            $args = shortcode_atts([
                'name' => '',
                'comment' => '',
                'url' => '',
                'content' => $content,
            ], $args);

            ob_start();
            get_template_part('elements/vc', 'customer-comments-item', $args);
            $output = ob_get_contents();
            ob_end_clean();
            return $output;
        }

        public function vc_hoster_homepage_title_two_render($args, $content = null)
        {
            $args = shortcode_atts([
                'title' => '',
                'subtitle' => '',
                'content' => $content,
            ], $args);

            ob_start();
            get_template_part('elements/vc', 'homepage-title-two', $args);
            $output = ob_get_contents();
            ob_end_clean();
            return $output;
        }

        public function vc_hoster_aboutus_title_three_render($args, $content = null)
        {
            $args = shortcode_atts([
                'title' => '',
                'content' => $content,
            ], $args);

            ob_start();
            get_template_part('elements/vc', 'aboutus-title-three', $args);
            $output = ob_get_contents();
            ob_end_clean();
            return $output;
        }

        public function vc_hoster_aboutus_contact_information_render($args, $content = null)
        {
            $args = shortcode_atts([
                'phonenumber' => '',
                'email' => '',
                'address' => '',
                'content' => $content,
            ], $args);

            ob_start();
            get_template_part('elements/vc', 'aboutus-contact-information', $args);
            $output = ob_get_contents();
            ob_end_clean();
            return $output;
        }

        public function vc_hoster_package_list_render($args, $content = null)
        {
            $args = shortcode_atts([
                'center' => '',
                'content' => $content,
            ], $args);

            ob_start();
            get_template_part('elements/vc', 'package-list', $args);
            $output = ob_get_contents();
            ob_end_clean();
            return $output;
        }

        public function vc_hoster_package_facilities_render($args, $content = null)
        {
            $args = shortcode_atts([
                'title' => '',
                'price' => '',
                'content' => $content,
            ], $args);

            ob_start();
            get_template_part('elements/vc', 'package-facilities', $args);
            $output = ob_get_contents();
            ob_end_clean();
            return $output;
        }

        public function vc_hoster_package_properties_box_render($args, $content = null)
        {
            $args = shortcode_atts([
                'title' => '',
                'color' => '',
                'title_color' => '',
                'content' => $content,
            ], $args);

            ob_start();
            get_template_part('elements/vc', 'package-properties-box', $args);
            $output = ob_get_contents();
            ob_end_clean();
            return $output;
        }

        public function vc_hoster_search_advanced_render($args, $content = null)
        {
            $args = shortcode_atts([
                'content' => $content,
            ], $args);

            ob_start();
            get_template_part('elements/vc', 'search-advanced', $args);
            $output = ob_get_contents();
            ob_end_clean();
            return $output;
        }
    }

    if (function_exists('vc_map')) LarateamHosterVC::get();