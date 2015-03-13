<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
      <?php
        if( ! is_home() ):
          wp_title( '|', true, 'right' );
        endif;
      ?>
    </title>
    <meta name="viewport" content="width=device-width">
    
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
    
    <!--[if lt IE 9]>
    <script src="<?php bloginfo('template_url'); ?>/js/html5-3.6-respond-1.1.0.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body>
    
	<!--[if lt IE 7]>
	<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->
    
    <header role="banner">
    
        <div class="wrap">
            
            <nav role="navigation">
        
                <!-- menu with list elements -->
                <?php /* wp_nav_menu( array( 'theme_location' => 'mainmenu' ) ); */ ?>
                
                <!-- menu without list elements -->
                <?php $defaults = array( 
                'theme_location' => 'mainmenu',
                'container'       => 'nav', 
                'container_class' => 'nav', 
                'echo'            => false,
                'fallback_cb'     => false,
                'items_wrap'      => '%3$s',
                'depth'           => 0
                ); 
                echo strip_tags(wp_nav_menu( $defaults ), '<a>');?>
            
            </nav>
            
            <div class="mobile-nav">
                
                <div class="mobile__button">
                    <p>Menu <span>☰</span></p>
                </div>
    
                <nav class="mobile__nav">
                    <?php $defaults = array( 
                    'theme_location' => 'mainmenu',
                    'container'       => 'nav', 
                    'container_class' => 'nav', 
                    'echo'            => false,
                    'fallback_cb'     => false,
                    'items_wrap'      => '%3$s',
                    'depth'           => 0
                    ); 
                    echo strip_tags(wp_nav_menu( $defaults ), '<a>');?>
                </nav>
            </div>
            
        </div>
    
    </header>