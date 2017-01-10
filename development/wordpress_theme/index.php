<?php get_header(); ?>
    <!-- Content -->
    <!-- Sticky Posts -->
    <div class="sticky-posts uk-block">
      <div class="uk-grid">
        <div class="uk-width-large-6-10 uk-container-center">
          <ul class="uk-slideshow" data-uk-slideshow="{animation: 'swipe',autoplay:true,autoplayInterval:10000}">
              <li>
                  <img src="images/sticky1.jpeg">
                  <div class="uk-overlay-panel uk-overlay-background uk-overlay-bottom">
                      <h2>Artikel</h2>
                      <p>
                          Kurze Beschreibung <a class="uk-link" href="">mehr lesen</a>
                      </p>
                  </div>
              </li>
              <li>
                  <img src="images/sticky2.jpg">
                  <div class="uk-overlay-panel uk-overlay-background uk-overlay-bottom">
                      <h2>Artikel</h2>
                      <p>
                          Kurze Beschreibung <a class="uk-link" href="">mehr lesen</a>
                      </p>
                  </div>
              </li>
          </ul>
        </div>
      </div>
    </div>

    <?php get_template_part( 'content', get_post_format() ); ?>

    <!-- new member action -->
    <div class="new-member-ad uk-vertical-align uk-text-center" data-uk-parallax="{bg: '-200'}">
        <div class="uk-vertical-align-middle">
            <div class="uk-h2 uk-text-contrast">
                <span>Du willst Mitglied werden?</span>
                <span><a class="call-to-action-button" href="#">So geht's</a></span>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>
