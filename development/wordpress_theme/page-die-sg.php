<?php get_header(); ?>
<!-- Content -->
<!-- ueber den verein -->
<div class="uk-text-justify">
  <div class="uk-grid">
    <div class="uk-width-9-10 uk-width-large-6-10 uk-container-center">
      <div class="uk-block vereinsgeschichte">
        <?php
          $vereinsgeschichte = get_post(172);
        ?>
        <h2><?php echo $vereinsgeschichte->post_title; ?></h2>
        <?php echo apply_filters('the_content', $vereinsgeschichte->post_content); ?>
      </div>
      <div class="uk-block vorstand">
        <h2>Der Vorstand</h2>
        <div class="uk-grid-width-1-2 uk-grid-width-medium-1-3" data-uk-grid="{gutter: 20, animation: false}">
          <?php
            $mypages = get_pages( array( 'parent' => 177, 'sort_column' => 'post_title') );
            foreach( $mypages as $page ) {
              $content = $page->post_content;
              if (! $content) {
                continue;
              }
          ?>
            <div class="vorstand-mitglied">
              <div class="uk-text-center">
                <?php if (has_post_thumbnail($page->ID)) {
                    echo get_the_post_thumbnail( $page->ID, 'medium' );
                  }
                  echo apply_filters('the_content', $content);
                ?>

                <?php  ?>
              </div>
            </div>
          <?php
            }
          ?>
        </div>
      </div>
      <div class="uk-block contact">
        <h2 id="kontakt">Kontakt</h2>
        <?php echo do_shortcode( '[contact-form-7 id="167" title="Kontaktformular 1" html_class="uk-form"]' ); ?>
      </div
    </div>
  </div>
</div>
<?php get_footer(); ?>
