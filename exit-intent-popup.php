<?php
/*
Plugin Name: Exit Intent Popup
Description: Simple wrapper for popup modal when user intents to leave the website
Version: 1.0.1
*/

namespace ms\ExitIntentPopup;

defined('ABSPATH') || exit;

require_once 'includes/class-frontend.php';

$exit_popup = new ExitPopup();