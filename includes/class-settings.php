<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class Wcodex_Settings {

    public function __construct() {
        add_action('admin_menu', [$this, 'add_menu_page']);
        add_action('admin_init', [$this, 'register_settings']);
    }

    public function add_menu_page() {
        add_menu_page(
            'Portfolio Settings',
            'Portfolio Settings',
            'manage_options',
            'wcodex-portfolio-settings',
            [$this, 'settings_page_html'],
            'dashicons-admin-generic',
            60
        );
    }

    public function register_settings() {
        register_setting('wcodex_portfolio_options', 'wcodex_portfolio_settings', [
            'sanitize_callback' => [$this, 'sanitize_settings']
        ]);

        add_settings_section('general_section', 'General Settings', null, 'wcodex-portfolio-settings');

        add_settings_field('button_color', 'Button Color', [$this, 'field_button_color'], 'wcodex-portfolio-settings', 'general_section');
        add_settings_field('hover_color', 'Button Hover Color', [$this, 'field_hover_color'], 'wcodex-portfolio-settings', 'general_section');
        add_settings_field('grid_columns', 'Grid Columns', [$this, 'field_grid_columns'], 'wcodex-portfolio-settings', 'general_section');
        add_settings_field('animation', 'Animation Type', [$this, 'field_animation'], 'wcodex-portfolio-settings', 'general_section');
    }

    public function sanitize_settings($input) {
        $input['button_color'] = sanitize_hex_color($input['button_color']);
        $input['hover_color'] = sanitize_hex_color($input['hover_color']);
        $input['grid_columns'] = intval($input['grid_columns']);
        $input['animation'] = sanitize_text_field($input['animation']);
        return $input;
    }

    public function field_button_color() {
        $options = get_option('wcodex_portfolio_settings');
        $color = $options['button_color'] ?? '#0d6efd';
        echo "<input type='color' name='wcodex_portfolio_settings[button_color]' value='{$color}'>";
    }

    public function field_hover_color() {
        $options = get_option('wcodex_portfolio_settings');
        $color = $options['hover_color'] ?? '#0b5ed7';
        echo "<input type='color' name='wcodex_portfolio_settings[hover_color]' value='{$color}'>";
    }

    public function field_grid_columns() {
        $options = get_option('wcodex_portfolio_settings');
        $value = $options['grid_columns'] ?? 3;
        echo "<select name='wcodex_portfolio_settings[grid_columns]'>
                <option value='2' " . selected($value, 2, false) . ">2 Columns</option>
                <option value='3' " . selected($value, 3, false) . ">3 Columns</option>
                <option value='4' " . selected($value, 4, false) . ">4 Columns</option>
              </select>";
    }

    public function field_animation() {
        $options = get_option('wcodex_portfolio_settings');
        $value = $options['animation'] ?? 'fade';
        echo "<select name='wcodex_portfolio_settings[animation]'>
                <option value='fade' " . selected($value, 'fade', false) . ">Fade</option>
                <option value='zoom' " . selected($value, 'zoom', false) . ">Zoom</option>
                <option value='slide' " . selected($value, 'slide', false) . ">Slide</option>
              </select>";
    }

    public function settings_page_html() {
        if (!current_user_can('manage_options')) return; ?>
<div class="wrap">
  <h1 class="wp-heading-inline">WCODEX Portfolio Settings</h1>
  <form method="post" action="options.php">
    <?php
                        settings_fields('wcodex_portfolio_options');
                        do_settings_sections('wcodex-portfolio-settings');
                        submit_button('Save Settings');
                        ?>
  </form>
</div>
<?php
    }
}