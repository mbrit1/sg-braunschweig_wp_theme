<?php get_header(); ?>
<!-- Content -->
<!-- page content -->
<div class="sg-articles uk-block uk-text-justify">
  <div class="uk-grid">
    <div class="uk-width-9-10 uk-width-large-7-10 uk-container-center">
      <?php if (have_posts()) {
        while (have_posts()) {
          the_post();
      ?>
        <article class="uk-article">
          <?php the_content(); ?>
        </article>
      <?php
        }
      }
      ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
