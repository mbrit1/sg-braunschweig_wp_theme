<!-- Footer -->
<footer class="uk-block text-muted">
    <div class="uk-grid">
        <div class="uk-width-9-10 uk-width-large-7-10 uk-container-center">
            <ul class="uk-grid uk-grid-width-large-1-3">
                <li class="footer-navigation">
                  <div class="uk-text-large footer-headline">
                      Navigation
                  </div>
                  <ul>
                    <?php wp_nav_menu(array( 'theme_location' => 'footer-menu', 'menu_class' => '', 'container'=> '', 'items_wrap' => '%3$s' )); ?>
                  </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="copyright uk-text-center uk-margin-large-top">
      Copyright &copy; <?php $fromYear = 2016;
                            $thisYear = (int)date('Y');
                            echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');
                      ?> SG FT/MTV Braunschweig Basketball
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
