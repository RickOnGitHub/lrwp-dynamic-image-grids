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
            'LRWP Admin',
            'LRWP Admin',
            'manage_options',
            'lrwp-admin',
            array($this, 'load_main_settings_view'),
            'dashicons-admin-generic',
            6
        );
    }

    // Set up the settings_fields('lrwp_main_settings');
    public function lrwp_main_settings()
    {
        // Register the settings
        register_setting('lrwp_main_settings', 'lrwp_main_settings');

        // Add the settings section
        add_settings_section(
            'lrwp_main_settings',
            'Main Settings',
            array($this, 'lrwp_main_settings_callback'),
            'lrwp_main_settings'
        );

        // Add the setting field
        add_settings_field(
            'lrwp_main_setting_1',
            'Setting 1',
            array($this, 'lrwp_main_setting_1_callback'),
            'lrwp_main_settings',
            'lrwp_main_settings'
        );

        // Add the setting field
        add_settings_field(
            'lrwp_main_setting_2',
            'Setting 2',
            array($this, 'lrwp_main_setting_2_callback'),
            'lrwp_main_settings',
            'lrwp_main_settings'
        );
    }

    // Just an example callback
    public function lrwp_main_settings_callback()
    {
        echo 'This is the main settings section.';
    }

    // Example setting 1
    public function lrwp_main_setting_1_callback()
    {
        echo '<input type="text" name="lrwp_main_settings[lrwp_main_setting_1]" value="' . esc_attr(get_option('lrwp_main_settings')['lrwp_main_setting_1']) . '" />';
    }

    // Example setting 2
    public function lrwp_main_setting_2_callback()
    {
        echo '<input type="text" name="lrwp_main_settings[lrwp_main_setting_2]" value="' . esc_attr(get_option('lrwp_main_settings')['lrwp_main_setting_2']) . '" />';
    }
}
