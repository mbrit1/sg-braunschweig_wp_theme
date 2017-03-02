<?php get_header(); ?>
<!-- Content -->
<!-- ueber den verein -->
<div class="uk-text-justify">
  <div class="uk-grid">
    <div class="uk-width-9-10 uk-width-large-7-10 uk-container-center">
      <div class="uk-block vereinsgeschichte">
        <?php
          $vereinsgeschichte = get_post(172);
        ?>
        <h1><?php echo $vereinsgeschichte->post_title; ?></h1>
        <?php echo apply_filters('the_content', $vereinsgeschichte->post_content); ?>
      </div>
      <div class="vorstand">
        <?php
          $vorstand = get_post(177);
        ?>
        <h1><?php echo $vorstand->post_title; ?></h1>
        <?php echo apply_filters('the_content', $vorstand->post_content); ?>
      </div>
      <div class="uk-block contact">
        <h1 id="kontakt">Kontakt</h1>
        <?php echo do_shortcode( '[contact-form-7 id="167" title="Kontaktformular 1" html_class="uk-form"]' ); ?>
      </div
    </div>
  </div>
</div>
<?php get_footer(); ?>
