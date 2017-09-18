<?php get_header(); ?>
<!-- Content -->
<!-- page content -->
<div class="404-page uk-block uk-text-justify">
  <div class="uk-grid">
    <div class="uk-width-9-10 uk-width-large-7-10 uk-container-center">
      <div class="404-container">
        <div class="uk-grid" data-uk-grid-match="{target:'.uk-panel'}">
          <div class="uk-width-medium-1-2 uk-width-small-1-1">
            <div class="404-img uk-panel">
              <div class="404-img-content">
                <img src="<?php bloginfo('template_directory');?>/images/sg_logo_big.png"  />
              </div>
            </div>
          </div>
          <div class="uk-width-medium-1-2 uk-width-small-1-1">
            <div class="404-text uk-panel">
              <div class="404-text-content">
                <h2>Airball</h2>
                <p>
                  Das ging leider schief. Probier es am besten noch mal und klicke oben auf einen Punk aus der Navigation. Sollte das nicht weiterhelfen, dann melde dich doch einfach über unser <a href="<?php echo get_page_link(141); ?>/#kontakt">Kontaktformular</a> und wir gucken, wie wir das Problem lösen!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
