<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class Wcodex_CPT {

    public function __construct() {
        add_action('init', [$this, 'register_cpt']);
        add_action('init', [$this, 'register_taxonomy']);
    }

    public function register_cpt() {
        $args = [
            'label' => 'Projects',
            'public' => true,
            'menu_icon' => 'dashicons-portfolio',
            'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
            'has_archive' => true,
            'rewrite' => ['slug' => 'projects'],
            'show_in_rest' => true,
        ];
        register_post_type('project', $args);
    }

    public function register_taxonomy() {
        $args = [
            'label' => 'Project Categories',
            'rewrite' => ['slug' => 'project-category'],
            'hierarchical' => true,
            'show_in_rest' => true,
        ];
        register_taxonomy('project_category', 'project', $args);
    }
}