<?php // This is the main settings view for the plugin. ?>
<div class="wrap">
    <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
    <form method="post" action="options.php">
        <?php settings_fields('lrwp_main_settings'); ?>
        <?php do_settings_sections('lrwp_main_settings'); ?>
        <?php submit_button(); ?>
    </form>
</div>