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
                'name' => '?????? ???????????? ????',
                'base' => 'vc_hoster_whyus',
                'description' => '',
                'category' => 'Hoster',
                'class' => '',
                'icon' => get_template_directory_uri() . '/assets/images/logo.png',
                'show_settings_on_create' => true,
                'params' => [
                    [
                        "type" => "attach_image",
                        "heading" => '??????????',
                        "param_name" => "image",
                        "description" => '?????????? ???? ???????????? ????????.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => '??????????',
                        "admin_label" => true,
                        "param_name" => "title",
                        "description" => '?????????? ???? ???????? ????????.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => '??????',
                        "param_name" => "text",
                        "description" => '?????? ???? ???????? ????????.'
                    ],
                    [
                        "type" => "colorpicker",
                        "heading" => '??????',
                        "param_name" => "color",
                        "description" => '?????? ???? ???????????? ????????.'
                    ]
                ]
            ]);
        }

        public function vc_hoster_services_vc_map()
        {
            return vc_map(array(
                'name' => '?????????? ????',
                'base' => 'vc_hoster_services',
                'description' => '',
                'category' => 'Hoster',
                'icon' => get_template_directory_uri() . '/assets/images/logo.png',
                'show_settings_on_create' => true,
                'params' => [
                    [
                        "type" => "attach_image",
                        "heading" => '??????????',
                        "param_name" => "image",
                        "description" => '?????????? ???? ???????????? ????????.'
                    ],
                    [
                        "type" => "textfield",
                        "holder" => "",
                        "admin_label" => true,
                        "heading" => '?????????? ??????',
                        "param_name" => "title",
                        "description" => '?????????? ?????? ?????? ???? ???????? ????????.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => '?????? ?????????? ??????',
                        "param_name" => "subtitle",
                        "description" => '?????? ?????????? ?????? ?????? ???? ???????? ????????.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => '?????? ???????????? ????????',
                        "param_name" => "continue",
                        "description" => '?????? ???????????? ???????? ???? ???????? ????????.'
                    ],
                    [
                        "type" => "textarea_html",
                        "heading" => '???????? ?????? ??????',
                        "param_name" => "content",
                        "description" => '???????? ?????? ?????? ?????? ???? ???? ???????? ???????? ???????? ????????.'
                    ],
                ]
            ));
        }

        public function vc_hoster_homepage_title_one_vc_map()
        {
            return vc_map([
                'name' => '?????????? ???????? ????',
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
                        "heading" => '??????????',
                        "param_name" => "title",
                        "description" => '?????????? ???? ???????? ????????.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => '?????? ??????????',
                        "param_name" => "subtitle",
                        "description" => '?????? ?????????? ???? ???????? ????????.'
                    ],
                ]
            ]);
        }

        public function vc_hoster_offer_slider_vc_map()
        {
            return vc_map([
                'name' => '?????????????? ?????????? ??????????',
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
                'name' => '???????? ?????????????? ?????????? ??????????',
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
                        "heading" => '??????????',
                        "admin_label" => true,
                        "param_name" => "title",
                        "description" => '?????????? ???? ???????? ????????.',
                    ],
                    [
                        "type" => "textfield",
                        "heading" => '???? ??????????',
                        "param_name" => "code",
                        "description" => '???? ?????????? ???? ???????? ????????.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => '?????????? ??????????',
                        "param_name" => "date",
                        "description" => '?????????? ?????????? ???? ?????????? Y/d/m ???????? ????????.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => '???????? ??????????',
                        "param_name" => "percent",
                        "description" => '???????? ?????????? ???? ???????? ????????.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => '?????????? ??????',
                        "param_name" => "target",
                        "description" => '?????? ?????????? ???????? ???? ???????? ???? ?????????????? ????????'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => '???????? ??????????',
                        "param_name" => "url",
                        "description" => '???????? ?????????? ???? ???????? ????????.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => '???????? ??????',
                        "param_name" => "field1",
                        "description" => '???????? ?????? ???? ???????? ????????.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => '?????????? ???????? ??????',
                        "param_name" => "vfield1",
                        "description" => '?????????? ???????? ?????? ???? ???????? ????????.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => '???????? ??????',
                        "param_name" => "field2",
                        "description" => '???????? ?????? ???? ???????? ????????.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => '?????????? ???????? ??????',
                        "param_name" => "vfield2",
                        "description" => '?????????? ???????? ?????? ???? ???????? ????????.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => '???????? ??????',
                        "param_name" => "field3",
                        "description" => '???????? ?????? ???? ???????? ????????.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => '?????????? ???????? ??????',
                        "param_name" => "vfield3",
                        "description" => '?????????? ???????? ?????? ???? ???????? ????????.'
                    ],
                ]
            ]);
        }

        public function vc_hoster_parallax_one_vc_map()
        {
            return vc_map([
                'name' => '???????????????? ?????????? ????',
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
                        "heading" => '?????????? ???? ??????????',
                        "param_name" => "background",
                        "description" => '?????????? ???? ???? ?????????? ???? ???????????? ????????.'
                    ],
                    [
                        "type" => "colorpicker",
                        "heading" => '?????? ??????????',
                        "param_name" => "background_color",
                        "description" => '?????? ???? ?????????? ???? ???????????? ????????.'
                    ],
                ],
            ]);
        }

        public function vc_hoster_counter_parallax_vc_map()
        {
            return vc_map([
                'name' => '?????????????? ????????????????',
                'base' => 'vc_hoster_counter_parallax',
                "admin_label" => true,
                'description' => '',
                'category' => 'Hoster',
                'icon' => get_template_directory_uri() . '/assets/images/logo.png',
                'show_settings_on_create' => true,
                'params' => [
                    [
                        "type" => "textfield",
                        "heading" => '?????????? ?????????????? ??????',
                        "admin_label" => true,
                        "param_name" => "title1",
                        "description" => '?????????? ?????????????? ?????? ???? ???????? ????????.',
                    ],
                    [
                        "type" => "textfield",
                        "heading" => '?????? ?????????????? ??????',
                        "param_name" => "number1",
                        "description" => '?????? ?????????????? ?????? ???? ???????? ????????.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => '?????????? ?????????????? ??????',
                        "admin_label" => true,
                        "param_name" => "title2",
                        "description" => '?????????? ?????????????? ?????? ???? ???????? ????????.',
                    ],
                    [
                        "type" => "textfield",
                        "heading" => '?????? ?????????????? ??????',
                        "param_name" => "number2",
                        "description" => '?????? ?????????????? ?????? ???? ???????? ????????.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => '?????????? ?????????????? ??????',
                        "admin_label" => true,
                        "param_name" => "title3",
                        "description" => '?????????? ?????????????? ?????? ???? ???????? ????????.',
                    ],
                    [
                        "type" => "textfield",
                        "heading" => '?????? ?????????????? ??????',
                        "param_name" => "number3",
                        "description" => '?????? ?????????????? ?????? ???? ???????? ????????.'
                    ],
                ]
            ]);
        }

        public function vc_hoster_customers_vc_map()
        {
            return vc_map([
                'name' => '??????????????',
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
                'name' => '???????? ?????????????? ??????????????',
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
                        "heading" => '???????? ??????????',
                        "param_name" => "image",
                        "description" => '???????? ?????????? ???? ???????????? ????????.'
                    ],
                    [
                        "type" => "textfield",
                        "admin_label" => true,
                        "heading" => '?????? ??????????',
                        "param_name" => "name",
                        "description" => '?????? ?????????? ???? ???????? ????????.'
                    ],
                ]
            ]);
        }

        public function vc_hoster_customer_comments_vc_map()
        {
            return vc_map([
                'name' => '?????????? ??????????????',
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
                'name' => '???????? ?????????????? ?????????? ??????????????',
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
                        "heading" => '?????? ??????????',
                        "param_name" => "name",
                        "description" => '?????? ?????????? ???? ???????? ????????.'
                    ],
                    [
                        "type" => "textarea",
                        "heading" => '??????',
                        "param_name" => "comment",
                        "description" => '?????? ?????????? ???? ???????? ????????.'
                    ],
                    [
                        "type" => "textarea",
                        "heading" => '???????? ????????',
                        "param_name" => "url",
                        "description" => '???????? ???????? ?????????? ???? ???????? ????????.'
                    ],
                ]
            ]);
        }

        public function vc_hoster_homepage_title_two_vc_map()
        {
            return vc_map([
                'name' => '?????????? ???????? ????',
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
                        "heading" => '??????????',
                        "param_name" => "title",
                        "description" => '?????????? ???? ???????? ????????.'
                    ],
                ]
            ]);
        }

        public function vc_hoster_aboutus_title_three_vc_map()
        {
            return vc_map([
                'name' => '?????????? ???????? ????',
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
                        "heading" => '??????????',
                        "param_name" => "title",
                        "description" => '?????????? ???? ???????? ????????.'
                    ],
                ]
            ]);
        }

        public function vc_hoster_aboutus_contact_information_vc_map()
        {
            return vc_map([
                'name' => '?????????????? ???????? ??????????',
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
                        "heading" => '???????? ????????',
                        "param_name" => "phonenumber",
                        "description" => '???????? ???????? ???? ???????? ????????.'
                    ],
                    [
                        "type" => "textfield",
                        "holder" => "",
                        "admin_label" => true,
                        "heading" => '??????????',
                        "param_name" => "email",
                        "description" => '?????????? ???? ???????? ????????.'
                    ],
                    [
                        "type" => "textarea",
                        "holder" => "",
                        "admin_label" => true,
                        "heading" => '????????',
                        "param_name" => "address",
                        "description" => '???????? ???? ???????? ????????.'
                    ],
                ]
            ]);
        }

        public function vc_hoster_package_list_vc_map()
        {
            return vc_map([
                'name' => '???????? ???????? ?????? ??????????',
                'base' => 'vc_hoster_package_list',
                'description' => '???? ?????? ?????????? ?????? ???? ?????? ???????? ?????? ???????? ?????????????? ?????????? ?????????????? ????????.',
                'category' => 'Hoster',
                'class' => '',
                'icon' => get_template_directory_uri() . '/assets/images/logo.png',
                'show_settings_on_create' => true,
                'params' => [
                    [
                        "type" => "checkbox",
                        "holder" => "",
                        "admin_label" => true,
                        "heading" => '?????? ??????',
                        "param_name" => "center",
                        "description" => '???????? ???? ?????? ?????? ????????????'
                    ],
                ]
            ]);
        }

        public function vc_hoster_package_facilities_vc_map()
        {
            return vc_map([
                'name' => '?????????? ?????????? ???????? ???????? ????',
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
                        "heading" => '??????????',
                        "param_name" => "title",
                        "description" => '?????????? ???? ???????? ????????.'
                    ],
                    [
                        "type" => "textfield",
                        "heading" => '????????',
                        "param_name" => "price",
                        "description" => '???????? ???? ???????? ????????.'
                    ],
                ]
            ]);
        }

        public function vc_hoster_package_properties_box_vc_map()
        {
            return vc_map([
                'name' => '???????? ???????? ?????????? ?????? ??????????',
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
                        "heading" => '??????????',
                        "param_name" => "title",
                        "description" => '?????????? ???? ???????? ????????.'
                    ],
                    [
                        "type" => "colorpicker",
                        "heading" => '??????',
                        "param_name" => "color",
                        "description" => '?????? ?????????? ???????? ???? ???????????? ????????.'
                    ],
                    [
                        "type" => "colorpicker",
                        "heading" => '?????? ??????????',
                        "param_name" => "title_color",
                        "description" => '?????? ?????????? ???????? ???? ???????????? ????????.'
                    ],
                ]
            ]);
        }

        public function vc_hoster_search_advanced_vc_map()
        {
            return vc_map([
                'name' => '?????????????? ???????? ???????? ?????? ??????????',
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