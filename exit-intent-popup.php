<?php
/*
Plugin Name: Exit Intent Popup
Description: Simple wrapper for popup modal when user intents to leave the website
Version: 1.0.0
*/

namespace bideja;

if (!defined('ABSPATH')) {
    exit;
}

require 'includes/frontend.php';

$exit_popup = new ExitPopup();
