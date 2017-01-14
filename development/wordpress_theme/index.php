<?php get_header(); ?>
    <!-- Content -->
    <?php $get_important_posts = new WP_Query('cat=4&post_count=5');
      if ($get_important_posts->have_posts()) : ?>
      <!-- Sticky Posts -->
      <div class="sticky-posts uk-block">
        <div class="uk-grid">
          <div class="uk-width-large-6-10 uk-container-center">
            <ul class="uk-slideshow" data-uk-slideshow="{animation: 'swipe',autoplay:true,autoplayInterval:10000}">
              <?php while ( $get_important_posts->have_posts() ) : $get_important_posts->the_post(); ?>
                <li>
                  <?php if (has_post_thumbnail()) {?>
                    <img src="<?php the_post_thumbnail_url('large'); ?>">
                  <?php } else { ?>
                    <img src="<?php bloginfo('template_directory');?>/images/sticky1.jpeg">
                  <?php } ?>
                  <div class="uk-overlay-panel uk-overlay-background uk-overlay-bottom">
                      <h2><?php the_title(); ?></h2>
                      <?php the_excerpt(); ?>
                      <a class="uk-link" href="<?php echo get_permalink(); ?>">mehr lesen</a>
                  </div>
                </li>
            	<?php endwhile; ?>
            </ul>
          </div>
        </div>
      </div>
    <?php endif; ?>
    <!-- blog posts -->
    <div class="sg-articles uk-block uk-text-justify">
      <div class="uk-grid">
        <div class="uk-width-9-10 uk-width-large-6-10 uk-container-center">
          <?php
            if (have_posts()) : while (have_posts()) : the_post();
              get_template_part('content', get_post_format());
            endwhile; ?>
              <div class="article-pagination uk-margin-large-top">
                <li class="uk-pagination-previous"><?php previous_posts_link(); ?></li>
                <li class="uk-pagination-next"><?php next_posts_link(); ?></li>
              </div>
            <?php endif;
          ?>
        </div>
      </div>
    </div>
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
