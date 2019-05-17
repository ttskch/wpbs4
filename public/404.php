<?php
/*
Template Name: wpbs4
*/
global $tchConfig;
?>

<?php get_header(); ?>

<div class="site-container">
  <div class="site-content">
    <div class="article-wrapper">
      <article>
        <header>
          <div class="panel">
            <h1>404 Not Found</h1>
          </div>
        </header>
        <section class="post-content">
          <p><?php echo $tchConfig['str_404_message']; ?></p>
        </section>
      </article>
    </div>
  </div>

    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
