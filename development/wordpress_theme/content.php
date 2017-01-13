<article class="uk-article">
    <h1 class="uk-article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <p class="uk-article-meta"><?php the_date(); ?></p>
    <div class="uk-clearfix">
      <img class="uk-align-medium-right article-img" src="<?php the_post_thumbnail_url('large'); ?>" />
      <?php the_content(); ?>
    </div>
</article>
<hr class="uk-grid-divider">
