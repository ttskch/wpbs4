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
      } ?>
  </div>

    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
