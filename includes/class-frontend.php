<?php

namespace ms\ExitIntentPopup;

defined('ABSPATH') || exit;

class ExitPopup
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', array($this, 'enqueueScripts' ));
        add_action('wp_footer', array($this, 'showComponent' ));
    }

	// Register scripts and styles
    public function enqueueScripts()
    {
        wp_register_style('exit-popup', plugins_url('../assets/exit-popup.css', __FILE__));
        wp_register_script('exit-popup', 'https://cdn.jsdelivr.net/npm/exit-intent-popup@1.0.0/js/bioep.min.js', array('jquery'), null, true);
        wp_register_script('exit-popup-settings', plugins_url('../assets/exit-popup.js', __FILE__), array('exit-popup'), null, true);

        wp_enqueue_style('exit-popup');
        wp_enqueue_script('exit-popup-settings');
    }

	// Show content of template as a shortcode component
    public function showComponent()
    {
        include(plugin_dir_path(__FILE__) . '/template.php');
    }
}