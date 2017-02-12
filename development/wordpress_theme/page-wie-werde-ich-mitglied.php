<?php get_header(); ?>
<!-- Content -->
<!-- Wie werde ich Mitglied Hauptseite -->
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
      <!-- die Hauptvereine -->
      <div class="uk-grid uk-margin-large-top club-membership">
      <?php
      	$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_title') );
      	foreach( $mypages as $page ) {
          $content = $page->post_content;
          if (! $content) {
            continue;
          }
      ?>
        <div class="uk-width-medium-1-2 uk-width-small-1-1">
          <div class="<?php echo strtolower(str_replace(" ", "-", $page->post_title)); ?>">
            <h2>
              <?php echo $page->post_title; ?>
            </h2>
            <div>
              <?php echo $content; ?>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
