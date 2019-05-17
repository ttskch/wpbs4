<?php
/*
Template Name: wpbs4
*/
?>

<?php get_header(); ?>

<div class="bg-white">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 pt-3 pb-5">
        <div id="content">
          <?php if (!have_posts()): ?>
            <p>該当する記事がありませんでした。</p>
          <?php endif; ?>

          <?php while (have_posts()): the_post(); ?>
            <article>
              <?php the_content(); ?>
            </article>
          <?php endwhile; ?>
        </div>
      </div>

      <div class="col-sm-4 pt-3 pb-5 bg-light">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
