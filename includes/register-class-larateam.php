<?php
if(!class_exists('LarateamHoster')){
    final class LarateamHoster
    {
        private static $instance = null;
        private static $template_data = [
            'product_title' => 'هاستر',
            'product_slug' => 'hoster',
            'product_id' => '100'
        ];
        private $license_status = 0;

        private function __construct()
        {
            add_action('wp_footer', [$this, 'footer'], 1);
            add_action('tgmpa_register', [$this, 'tgm']);
        }

        public static function get()
        {
            if (self::$instance == null) {
                self::$instance = new self();
            }

            return self::$instance;
        }

        public function tgm()
        {
            $pluginFolder = get_template_directory() . '/plugins/';

            $plugins = [
                [
                    'name' => 'WPBakery Page Builder',
                    'slug' => 'js_composer',
                    'source' => $pluginFolder . 'js_composer.zip',
                    'required' => true,
                    'version' => '',
                    'force_activation' => true,
                    'force_deactivation' => false,
                    'external_url' => '',
                    'is_callable' => '',
                ],
                [
                    'name' => 'Slider Revolution',
                    'slug' => 'revslider',
                    'source' => $pluginFolder . 'revslider.zip',
                    'required' => true,
                    'version' => '',
                    'force_activation' => true,
                    'force_deactivation' => false,
                    'external_url' => '',
                    'is_callable' => '',
                ],
                [
                    'name' => 'Advanced Custom Fields PRO',
                    'slug' => 'advanced-custom-fields-pro',
                    'source' => $pluginFolder . 'advanced-custom-fields-pro.zip',
                    'required' => true,
                    'version' => '',
                    'force_activation' => true,
                    'force_deactivation' => false,
                    'external_url' => '',
                    'is_callable' => '',
                ],
                [
                    'name' => 'Advanced Custom Fields: Font Awesome Field',
                    'slug' => 'advanced-custom-fields-font-awesome',
                    'required' => true,
                    'force_activation' => true,
                ],
                [
                    'name' => 'Max Mega Menu',
                    'slug' => 'megamenu',
                    'required' => true,
                    'force_activation' => true,
                ]

            ];
            $config = [
                'id' => 'larateam-hoster',
                'default_path' => '',
                'menu' => 'tgmpa-install-plugins',
                'parent_slug' => 'themes.php',
                'capability' => 'manage_options',
                'has_notices' => true,
                'dismissable' => true,
                'dismiss_msg' => '',
                'is_automatic' => false,
                'message' => '',
                'strings' => [
                    'page_title' => 'نصب افزونه های مورد نیاز',
                    'menu_title' => 'نصب افزونه',
                ],
            ];

            tgmpa($plugins, $config);
        }

    }

    LarateamHoster::get();
}