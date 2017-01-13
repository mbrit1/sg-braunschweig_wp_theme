<article class="uk-article">
    <h1 class="uk-article-title"><?php the_title(); ?></h1>
    <p class="uk-article-meta"><?php the_date(); ?></p>
    <div class="uk-clearfix">
      <?php if (has_post_thumbnail()) {?>
        <img class="uk-align-medium-right article-img" src="<?php the_post_thumbnail_url('large'); ?>" />
      <?php } ?>
      <?php the_content(); ?>
    </div>
</article>
