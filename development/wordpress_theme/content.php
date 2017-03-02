<article class="uk-article">
    <h1 class="uk-article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <p class="uk-article-meta">Geschrieben von <?php the_author_posts_link(); ?> am <?php the_date(); ?>, <?php the_category( ', ' ); ?></p>
    <div class="uk-clearfix">
      <?php
        if ( has_post_thumbnail() ) {
          the_post_thumbnail(array(550,9999), array('class' => 'uk-align-medium-left content-single-img'));
        }
        the_content();
      ?>
    </div>
</article>
<hr class="uk-grid-divider">
