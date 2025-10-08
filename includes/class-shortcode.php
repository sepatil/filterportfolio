<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class Wcodex_Shortcode {

    public function __construct() {
        add_shortcode('wcodex_portfolio', [$this, 'render_portfolio']);
    }

    public function render_portfolio($atts) {
        ob_start(); ?>

<section class="wcodex-portfolio py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold text-center mb-5">My WordPress Projects</h2>

    <div class="text-center mb-4">
      <?php $options = get_option('wcodex-portfolio-settings');?>
      <button class="btn btn-outline-primary mx-1 filter-btn active" data-filter="all">All</button>
      <?php
              $terms = get_terms(['taxonomy' => 'project_category', 'hide_empty' => true]);
              foreach ($terms as $term) {
                  echo '<button class="btn btn-outline-primary mx-1 filter-btn" data-filter="' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</button>';
              }
              ?>
    </div>

    <div id="projects-grid" class="d-flex flex-wrap gap-4 justify-content-center">
      <?php
              $projects = new WP_Query(['post_type' => 'project', 'posts_per_page' => -1]);
              while ($projects->have_posts()) : $projects->the_post();
                $github = get_post_meta(get_the_ID(), '_github_url', true);
                $demo = get_post_meta(get_the_ID(), '_demo_url', true);
                $terms = wp_get_post_terms(get_the_ID(), 'project_category', ['fields' => 'slugs']);
                $term_classes = implode(' ', $terms);
              ?>
      <div class="col-md-4 project-item <?php echo esc_attr($term_classes); ?>">
        <div class="card border-0 shadow-sm h-100">
          <div class="portfolio-img position-relative overflow-hidden">
            <?php if (has_post_thumbnail()) the_post_thumbnail('medium_large', ['class' => 'img-fluid']); ?>
            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
              <a href="<?php echo esc_url($demo ?: $github); ?>" target="_blank"
                class="btn btn-light rounded-pill px-3 py-1">
                <i class="bi bi-eye"></i> View
              </a>
            </div>
          </div>
          <div class="card-body">
            <h5 class="fw-bold"><?php the_title(); ?></h5>

          </div>
          <div class="card-footer bg-white border-0 d-flex justify-content-between">
            <?php if ($github): ?>
            <a href="<?php echo esc_url($github); ?>" target="_blank" class="btn btn-sm btn-outline-dark">
              <i class="bi bi-github"></i> GitHub
            </a>
            <?php endif; ?>
            <?php if ($demo): ?>
            <a href="<?php echo esc_url($demo); ?>" target="_blank" class="btn btn-sm btn-primary">
              <i class="bi bi-box-arrow-up-right"></i> Live
            </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </div>
</section>

<?php
        return ob_get_clean();
    }
}