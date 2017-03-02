<?php get_header(); ?>
<!-- Content -->
<!-- team page content -->
<div class="team-cards uk-margin-large-bottom">
  <div class="uk-width-9-10 uk-width-large-7-10 uk-container-center">
    <div class="uk-block team-navigation">
      <h1>Bei uns gibt es folgende Bereiche:</h1>
      <div class="team-navigation-links uk-text-center uk-text-large">
        <a href="#bundesliga-mannschaften">Bundesliga Mannschaften</a>, <a href="#jugendmannschaften">Jugendmannschaften</a>, <a href="#schulmannschaften">Schulemannschaften</a>, <a href="#seniorenmannschaften">Seniorenmannschaften</a>, <a href="#freizeitmannschaften">Freizeitmannschaften</a>
      </div>
    </div>
    <h1 id="bundesliga-mannschaften">Bundesliga Mannschaften</h1>
    <div class="uk-grid-width-small-1-1 uk-grid-width-medium-1-2" data-uk-grid="{gutter: 20, animation: false}">
      <?php
      	$mypages = get_pages( array( 'parent' => 144, 'sort_column' => 'post_title') );
      	foreach( $mypages as $page ) {
          $content = $page->post_content;
          if (! $content) {
            continue;
          }
      ?>
        <div class="card">
          <div class="uk-panel">
            <div class="uk-panel-teaser uk-cover-background card-title">
              <?php if (has_post_thumbnail($page->ID)) {
                  echo get_the_post_thumbnail( $page->ID, 'large' );
                } else {
              ?>
                <div class="alt-sticky-img">
                  <img src="<?php bloginfo('template_directory');?>/images/sg_logo_small.png"  />
                </div>
              <?php } ?>
              <h3 class="uk-panel-title"><?php echo $page->post_title; ?></h3>
            </div>
            <div class="card-body">
              <?php echo str_replace("<ul>", "<ul class='uk-list uk-list-striped'>", $content); ?>
            </div>
          </div>
        </div>
      <?php
      	}
      ?>
    </div>
    <h1 class="uk-margin-top-large" id="jugendmannschaften">Jugendmannschaften</h1>
    <div class="uk-grid-width-small-1-1 uk-grid-width-medium-1-2" data-uk-grid="{gutter: 20, animation: false}">
      <?php
      	$mypages = get_pages( array( 'parent' => 154, 'sort_column' => 'post_title') );
      	foreach( $mypages as $page ) {
          $content = $page->post_content;
          if (! $content) {
            continue;
          }
      ?>
        <div class="card">
          <div class="uk-panel">
            <div class="uk-panel-teaser uk-cover-background card-title">
              <?php if (has_post_thumbnail($page->ID)) {
                  echo get_the_post_thumbnail( $page->ID, 'large' );
                } else {
              ?>
                <div class="alt-sticky-img">
                  <img src="<?php bloginfo('template_directory');?>/images/sg_logo_small.png"  />
                </div>
              <?php } ?>
              <h3 class="uk-panel-title"><?php echo $page->post_title; ?></h3>
            </div>
            <div class="card-body">
              <?php echo str_replace("<ul>", "<ul class='uk-list uk-list-striped'>", $content); ?>
            </div>
          </div>
        </div>
      <?php
      	}
      ?>
    </div>
    <h1 class="uk-margin-top-large" id="schulmannschaften">Schulmannschaften</h1>
    <div class="uk-grid-width-small-1-1 uk-grid-width-medium-1-2" data-uk-grid="{gutter: 20, animation: false}">
      <?php
      	$mypages = get_pages( array( 'parent' => 151, 'sort_column' => 'post_title') );
      	foreach( $mypages as $page ) {
          $content = $page->post_content;
          if (! $content) {
            continue;
          }
      ?>
        <div class="card">
          <div class="uk-panel">
            <div class="uk-panel-teaser uk-cover-background card-title">
              <?php if (has_post_thumbnail($page->ID)) {
                  echo get_the_post_thumbnail( $page->ID, 'large' );
                } else {
              ?>
                <div class="alt-sticky-img">
                  <img src="<?php bloginfo('template_directory');?>/images/sg_logo_small.png"  />
                </div>
              <?php } ?>
              <h3 class="uk-panel-title"><?php echo $page->post_title; ?></h3>
            </div>
            <div class="card-body">
              <?php echo str_replace("<ul>", "<ul class='uk-list uk-list-striped'>", $content); ?>
            </div>
          </div>
        </div>
      <?php
      	}
      ?>
    </div>
    <h1 class="uk-margin-top-large" id="seniorenmannschaften">Seniorenmannschaften</h1>
    <div class="uk-grid-width-small-1-1 uk-grid-width-medium-1-2" data-uk-grid="{gutter: 20, animation: false}">
      <?php
      	$mypages = get_pages( array( 'parent' => 147, 'sort_column' => 'post_title') );
      	foreach( $mypages as $page ) {
          $content = $page->post_content;
          if (! $content) {
            continue;
          }
      ?>
        <div class="card">
          <div class="uk-panel">
            <div class="uk-panel-teaser uk-cover-background card-title">
              <?php if (has_post_thumbnail($page->ID)) {
                  echo get_the_post_thumbnail( $page->ID, 'large' );
                } else {
              ?>
                <div class="alt-sticky-img">
                  <img src="<?php bloginfo('template_directory');?>/images/sg_logo_small.png"  />
                </div>
              <?php } ?>
              <h3 class="uk-panel-title"><?php echo $page->post_title; ?></h3>
            </div>
            <div class="card-body">
              <?php echo str_replace("<ul>", "<ul class='uk-list uk-list-striped'>", $content); ?>
            </div>
          </div>
        </div>
      <?php
      	}
      ?>
    </div>
    <h1 class="uk-margin-top-large" id="freizeitmannschaften">Freizeitmannschaften</h1>
    <div class="uk-grid-width-small-1-1 uk-grid-width-medium-1-2" data-uk-grid="{gutter: 20, animation: false}">
      <?php
      	$mypages = get_pages( array( 'parent' => 149, 'sort_column' => 'post_title') );
      	foreach( $mypages as $page ) {
          $content = $page->post_content;
          if (! $content) {
            continue;
          }
      ?>
        <div class="card">
          <div class="uk-panel">
            <div class="uk-panel-teaser uk-cover-background card-title">
              <?php if (has_post_thumbnail($page->ID)) {
                  echo get_the_post_thumbnail( $page->ID, 'large' );
                } else {
              ?>
                <div class="alt-sticky-img">
                  <img src="<?php bloginfo('template_directory');?>/images/sg_logo_small.png"  />
                </div>
              <?php } ?>
              <h3 class="uk-panel-title"><?php echo $page->post_title; ?></h3>
            </div>
            <div class="card-body">
              <?php echo str_replace("<ul>", "<ul class='uk-list uk-list-striped'>", $content); ?>
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
