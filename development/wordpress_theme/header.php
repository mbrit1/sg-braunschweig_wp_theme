<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <!-- link all the styles -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/main.css" />

    <!-- link all the scripts -->
    <script src="<?php bloginfo('template_directory');?>/assets/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/uikit.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/slideshow.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/parallax.min.js"></script>

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
        <div class="nav-large-wrapper uk-hidden-small">
            <a href="<?php bloginfo( 'wpurl' );?>" class="uk-navbar-brand"><img src="images/sg_logo.jpg"  /><?php echo get_bloginfo( 'name' ); ?></a>
            <div class="uk-navbar-flip uk-margin-large-right navbar-menu">
                <ul class="uk-navbar-nav">
                    <li class="uk-active"><a href="#">Neuigkeiten</a></li>
                    <li><a href="teams.html">Teams</a></li>
                </ul>
            </div>

        </div>
        <div class="nav-small-wrapper uk-visible-small">
            <a href="" class="uk-navbar-toggle " data-uk-offcanvas="{target:'#small-nav'}"></a>
            <div class="uk-navbar-center">
                <a href="<?php bloginfo( 'wpurl' );?>" class="uk-navbar-brand"><img src="images/sg_logo.jpg"  /><?php echo get_bloginfo( 'name' ); ?></a>
            </div>
            <div id="small-nav" class="uk-offcanvas">
                <div class="uk-offcanvas-bar">
                    <ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav>
                        <li class="uk-active"><a href="#">Neuigkeiten</a></li>
                        <li class="uk-parent"><a href="teams">Teams</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">u10</a></li>
                                <li><a href="#">u12</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
