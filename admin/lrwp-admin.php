<?php

class LRWP_Admin
{
    private $plugin_name;
    private $version;

    public function __construct($plugin_name, $version)
    {
        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    // Create private function to load a view
    private function load_view($view)
    {
        require_once LRWP_PLUGIN_DIR . 'admin/views/' . $view . '.php';
    }

    // Create public function to load the main settings view
    public function load_main_settings_view()
    {
        $this->load_view('lrwp-main-settings-view');
    }

    // Create public function to load the admin menu
    public function load_admin_menu()
    {
        add_menu_page(
            'LRWP Dynamic Image Grids',
            'LRWP Dynamic Image Grids',
            'manage_options',
            'lrwp-dynamic-image-grids',
            array($this, 'load_main_settings_view'),
            'dashicons-images-alt',
            65
        );
    }
}
