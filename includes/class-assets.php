<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class Wcodex_Assets {
    public function __construct() {
        add_action('wp_enqueue_scripts', [$this, 'enqueue']);
    }

    public function enqueue() {
    $options = get_option('wcodex_portfolio_settings');
    $button = $options['button_color'] ?? '#0d6efd';
    $hover = $options['hover_color'] ?? '#0b5ed7';
    $animation = $options['animation'] ?? 'fade';
    $columns = $options['grid_columns'] ?? 3;

    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css');
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css');
    wp_enqueue_style('wcodex-portfolio-style', WCODEX_PORTFOLIO_URL . 'assets/css/style.css', [], '1.1');

    // Add inline dynamic CSS
    $custom_css = "
      .filter-btn {
        border-color: {$button};
        color: {$button};
      }
      .filter-btn.active, .filter-btn:hover {
        background: {$button};
        color: #fff;
        box-shadow: 0 4px 10px {$hover}66;
      }
      .project-item {
        animation: wcodex-{$animation} 0.6s ease;
      }
      .wcodex-portfolio .project-item { flex: 0 0 calc(100% / {$columns}); }
      @keyframes wcodex-fade { from {opacity: 0;} to {opacity: 1;} }
      @keyframes wcodex-zoom { from {transform: scale(0.9);} to {transform: scale(1);} }
      @keyframes wcodex-slide { from {transform: translateY(20px);} to {transform: translateY(0);} }
    ";
    wp_add_inline_style('wcodex-portfolio-style', $custom_css);

    wp_enqueue_script('wcodex-portfolio-js', WCODEX_PORTFOLIO_URL . 'assets/js/portfolio.js', [], '1.0', true);
}

}