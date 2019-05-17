<?php
/*
Template Name: wpbs4
*/
global $tchConfig;
?>

<?php get_header(); ?>

<div class="site-container">
  <div class="site-content">
      <?php while (have_posts()) {
          the_post();
          get_template_part('includes/content');

          // print hr unless last of the LOOP.
          global $wp_query;
          if ($wp_query->current_post + 1 !== $wp_query->post_count) {
              echo '<hr/>';
          }
      } ?>
      <?php get_template_part('includes/paginator'); ?>
  </div>

    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
