<?php get_header(); ?>
    <!-- Content -->
    <?php $get_important_posts = new WP_Query('cat=4&post_count=5');
      $number_of_posts = $get_important_posts->found_posts;
      if ($get_important_posts->have_posts()) : ?>
      <!-- Sticky Posts -->
      <div class="sticky-posts uk-block">
        <div class="uk-grid">
          <div class="uk-width-large-6-10 uk-container-center">
            <div <?php if ( $number_of_posts > 1) echo 'class="uk-slidenav-position";' ?> data-uk-slideshow="{animation: 'swipe',autoplay:true,autoplayInterval:10000}">
              <ul class="uk-slideshow">
                <?php while ( $get_important_posts->have_posts() ) : $get_important_posts->the_post(); ?>
                  <li>
                    <?php if (has_post_thumbnail()) {?>
                      <img src="<?php the_post_thumbnail_url('large'); ?>">
                    <?php } else { ?>
                      <div class="alt-sticky-img">
                        <img src="<?php bloginfo('template_directory');?>/images/sg_logo_big.png"  />
                      </div>
                    <?php } ?>
                    <div class="uk-overlay-panel uk-overlay-background uk-overlay-bottom">
                        <h2><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                        <a class="uk-link" href="<?php echo get_permalink(); ?>">mehr lesen</a>
                    </div>
                  </li>
              	<?php endwhile; ?>
              </ul>
              <?php if ( $number_of_posts > 1) { ?>
              <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
              <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
              <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center">
                  <li data-uk-slideshow-item="0"><a href=""></a></li>
                  <li data-uk-slideshow-item="1"><a href=""></a></li>
              </ul>
              <?php } ?>
            </div>


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
                <span><a class="call-to-action-button uk-animation-reverse uk-animation-hover uk-animation-scale" href="<?php echo get_page_link(31); ?>">So geht's</a></span>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>
