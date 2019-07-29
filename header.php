<?php
/**
 * @package our
 **/?>
    <!DOCTYPE html>
    <html "<?php language_attributes(); ?>">

    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126976375-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-126976375-1');
        </script>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <!-- Custom CDN(s) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <!-- Adds .box for same height columns -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>
        <!-- Adds CSS for slick slider -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick-theme.css"/>
        <!-- Bootstrap Dropdown Hover CSS -->
        <link href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-dropdownhover.min.css" rel="stylesheet">
        <!-- Adds CSS for fancybox -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
        <!-- Custom Font(s) -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <link rel="stylesheet" href="https://use.typekit.net/ihg8nzt.css">
        <link href="https://fonts.googleapis.com/css?family=Cinzel|Source+Sans+Pro:300,400" rel="stylesheet">
        <!-- Custom Script(s) -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/custom-scripts.js"></script>
        <!-- Bootstrap Dropdown Hover JS -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-dropdownhover.min.js"></script>
        <!-- Adds JS for slick slider -->
        <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.min.js"></script>
        <!-- Adds JS for fancybox -->
        <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <a href="#0" class="btt-top">Top</a>
        <div class="container-fluid navigation-section">
            <div class="row">
                <div class="col-xs-12 logo">
                    <div class="content">
                        <h1 class="orange">BONTEMPS</h1>
                        <h3>INTERIORS</h3> 
                    </div>
                </div>
                <div class="col-xs-12 desktop-navbar">
                    <div class="toggle-section hidden-lg">
                        <button type="button" class="navbar-toggle collapsed">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar top-bar"></span>
                          <span class="icon-bar middle-bar"></span>
                          <span class="icon-bar bottom-bar"></span>
                        </button>
                    </div>
                    <nav class="navbar-desktop" data-hover="dropdown" data-animations="" role="navigation">
                        <?php wp_nav_menu( array( 'menu'=> 'primary', 'theme_location' => 'primary', 'depth' => 2, 'container' => 'div', 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 'walker' => new wp_bootstrap_navwalker()) ); ?>
                    </nav>
                </div>
                <div class="col-xs-12 mobile-navbar">
                    <nav class="navbar navbar-default navbar-mobile" role="navigation">
                        <?php wp_nav_menu( array( 'menu'=> 'primary', 'theme_location' => 'primary', 'depth' => 2, 'container' => 'div', 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 'walker' => new wp_bootstrap_navwalker()) ); ?>
                    </nav>
                </div>
            </div>
        </div>