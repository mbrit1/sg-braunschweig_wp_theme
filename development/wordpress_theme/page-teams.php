<?php get_header(); ?>
<!-- Content -->
<!-- team page content -->
<div class="team-cards uk-margin-large-top">
  <div class="uk-width-9-10 uk-width-large-7-10 uk-container-center">
    <div class="uk-grid-width-small-1-2 uk-grid-width-medium-1-3" data-uk-grid="{gutter: 20, animation: false}">
      <?php
      	$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_title') );
      	foreach( $mypages as $page ) {
          $content = $page->post_content;
          if (! $content) {
            continue;
          }
      ?>
        <div class="card">
          <div class="uk-panel">
            <div class="uk-panel-teaser uk-cover-background">
              <?php if (has_post_thumbnail($page->ID)) {
                  echo get_the_post_thumbnail( $page->ID, 'full' );
                } else {
              ?>
                <img src="<?php bloginfo('template_directory');?>/images/team1.jpeg">
              <?php } ?>
            </div>
            <div class="card-body">
              <h3 class="uk-panel-title">1. Herren</h3>
              <p>
                  Trainer: Max Mustermann
              </p>
              <p>
                  Trainingszeiten:
                  <li>
                      <ul>
                          Mo 20-22 Uhr
                      </ul>
                      <ul>
                          Mi 19 - 21 Uhr
                      </ul>
                  </li>
              </p>
            </div>
          </div>
        </div>
      <?php
      	}
      ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
