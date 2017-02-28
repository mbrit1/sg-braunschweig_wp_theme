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
      <div class="uk-grid uk-margin-large-top club-membership" data-uk-grid-match="{target:'.uk-panel'}">
        <div class="uk-width-medium-1-2 uk-width-small-1-1">
          <div class="ft-braunschweig uk-panel">
            <div class="header uk-margin-bottom uk-clearfix">
              <?php
                $ftBraunschweig = get_post(128);

                if (has_post_thumbnail($ftBraunschweig->ID)) {
                  echo get_the_post_thumbnail( $ftBraunschweig->ID, 'medium' );
                }
              ?>
              <h2>
                <?php echo $ftBraunschweig->post_title; ?>
              </h2>
            </div>
            <div>
              <?php echo apply_filters('the_content', $ftBraunschweig->post_content); ?>
            </div>
          </div>
        </div>
        <div class="uk-width-medium-1-2 uk-width-small-1-1">
          <div class="mtv-braunschweig uk-panel">
            <?php
              $mtvBraunschweig = get_post(130);

              if (has_post_thumbnail($mtvBraunschweig->ID)) {
                echo get_the_post_thumbnail( $mtvBraunschweig->ID, 'medium' );
              }
            ?>
            <div class="uk-margin-top">
              <?php echo apply_filters('the_content', $mtvBraunschweig->post_content); ?>
            </div>
          </div>
        </div>
        <div class="uk-width-1-1">
          <div class="sg-braunschweig uk-margin-large-top">
            <?php
              $sgBraunschweig = get_post(209);
            ?>
            <div>
              <?php echo apply_filters('the_content', $sgBraunschweig->post_content); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
