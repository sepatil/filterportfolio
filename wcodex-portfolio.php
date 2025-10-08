<?php
/**
 * Plugin Name: WCODEX Filterable Portfolio
 * Description: Display a filterable WordPress projects portfolio with categories and GitHub links.
 * Version: 1.0
 * Author: WCODEX
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Autoload classes
spl_autoload_register(function($class) {
    if (strpos($class, 'Wcodex_') === 0) {
        $file = plugin_dir_path(__FILE__) . 'includes/' . strtolower(str_replace('Wcodex_', 'class-', $class)) . '.php';
        if (file_exists($file)) include $file;
    }
});

// Define constants
define('WCODEX_PORTFOLIO_URL', plugin_dir_url(__FILE__));
define('WCODEX_PORTFOLIO_PATH', plugin_dir_path(__FILE__));

// Initialize plugin
final class Wcodex_Portfolio {
    public function __construct() {
        new Wcodex_CPT();
        new Wcodex_Meta();
        new Wcodex_Assets();
        new Wcodex_Shortcode();
        new Wcodex_Settings(); 
    }
}
new Wcodex_Portfolio();