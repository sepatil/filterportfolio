<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class Wcodex_Meta {

    public function __construct() {
        add_action('add_meta_boxes', [$this, 'add_meta_box']);
        add_action('save_post', [$this, 'save_meta']);
    }

    public function add_meta_box() {
        add_meta_box('project_meta', 'Project Links', [$this, 'render_meta_box'], 'project', 'side');
    }

    public function render_meta_box($post) {
        $github = get_post_meta($post->ID, '_github_url', true);
        $demo = get_post_meta($post->ID, '_demo_url', true);
        ?>
<p><label>GitHub URL:</label>
  <input type="url" name="github_url" value="<?php echo esc_attr($github); ?>" class="widefat">
</p>
<p><label>Live Demo URL:</label>
  <input type="url" name="demo_url" value="<?php echo esc_attr($demo); ?>" class="widefat">
</p>
<?php
    }

    public function save_meta($post_id) {
        if (isset($_POST['github_url'])) update_post_meta($post_id, '_github_url', esc_url_raw($_POST['github_url']));
        if (isset($_POST['demo_url'])) update_post_meta($post_id, '_demo_url', esc_url_raw($_POST['demo_url']));
    }
}