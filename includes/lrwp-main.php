<?php

class LRWP_Main
{
    private $plugin_name;
    private $version;

    public function __construct($plugin_name, $version)
    {
        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    public function start()
    {
        $this->load_plugin();
    }

    private function load_plugin()
    {
        // Load the admin file
        require_once LRWP_PLUGIN_DIR . 'admin/lrwp-admin.php';

        // Load the public file
        require_once LRWP_PLUGIN_DIR . 'public/lrwp-public.php';

        $this->load_admin();
        $this->load_public();
    }

    private function load_admin()
    {
        // Create new admin object
        $admin = new LRWP_Admin($this->plugin_name, $this->version);

        // Load the admin menu via an add_action hook
        add_action('admin_menu', array($admin, 'load_admin_menu'));
    }

    private function load_public()
    {
        // Create new public object
        $public = new LRWP_Public($this->plugin_name, $this->version);

    }
}
