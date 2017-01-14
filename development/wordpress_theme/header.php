<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body class="sg-theme">
    <!-- Navigation -->
    <nav class="uk-navbar uk-navbar-attached">
        <!-- medium/large display navigation -->
        <div class="nav-large-wrapper uk-hidden-small">
            <a href="<?php bloginfo( 'wpurl' );?>" class="uk-navbar-brand"><img src="<?php bloginfo('template_directory');?>/images/sg_logo.jpg"  /><?php echo get_bloginfo( 'name' ); ?></a>
            <div class="uk-navbar-flip uk-margin-large-right navbar-menu">

                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'uk-navbar-nav', 'container'=> '', ) ); ?>
            </div>
        </div>
        <!-- phone display navigation -->
        <div class="nav-small-wrapper uk-visible-small">
            <a href="" class="uk-navbar-toggle " data-uk-offcanvas="{target:'#small-nav'}"></a>
            <div class="uk-navbar-center">
                <a href="<?php bloginfo( 'wpurl' );?>" class="uk-navbar-brand"><img src="<?php bloginfo('template_directory');?>/images/sg_logo.jpg"  /><?php echo get_bloginfo( 'name' ); ?></a>
            </div>
            <div id="small-nav" class="uk-offcanvas">
                <div class="uk-offcanvas-bar">
                    <ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav>
                        <li class="uk-active"><a href="#">Neuigkeiten</a></li>
                        <?php wp_list_pages( '&title_li=' ); ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
