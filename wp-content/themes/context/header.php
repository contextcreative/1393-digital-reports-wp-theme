<!DOCTYPE html>
<html <?php language_attributes(); ?>>


<!-- Head
============================================= -->
<head>


    <!-- Meta tags 
    ============================================= -->
    <meta http-equiv="content-type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Meta Tags [END] -->



    <!-- Google Analytics 
    ============================================= -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        // update XXXXX with the GA id
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- Google Analytics [END] -->



    <!-- Stylesheets
    ============================================= -->
    <?php wp_head(); ?>
    <!-- Stylesheets [END] -->



    <!-- Customizer Styles
    ============================================= -->
    <?php
        // create vars for each customizer style
        $globalFontFamily = get_theme_mod( 'context_global_font_family' );
        $globalTitlesFontFamily = get_theme_mod( 'context_global_titles_font_family' );
        $globalFontColor = get_theme_mod( 'context_global_font_color' );
        $globalTitlesFontColor = get_theme_mod( 'context_global_titles_font_color' );
        $globalLinksFontColor = get_theme_mod( 'context_global_links_font_color' );
    ?>
    <style>
        :root {
            <?php if ($globalFontFamily) { ?> 
                --font-family: <?php echo $globalFontFamily; ?>; 
            <?php } ?>
            <?php if ($globalTitlesFontFamily) { ?> 
                --font-family-titles: <?php echo $globalTitlesFontFamily; ?>; 
            <?php } else { ?>
                --font-family-titles: <?php echo $globalFontFamily; ?>; 
            <?php } ?>
            <?php if ($globalFontColor) { ?> 
                --font-color-primary: <?php echo $globalFontColor; ?>; 
            <?php } ?>
            <?php if ($globalTitlesFontColor) { ?> 
                --font-color-titles: <?php echo $globalTitlesFontColor; ?>; 
            <?php } ?>
            <?php if ($globalLinksFontColor) { ?> 
                --font-color-links: <?php echo $globalLinksFontColor; ?>; 
            <?php } ?>
        }
        .heading-one {}
        .heading-two {}
        .heading-three {}
        .heading-four {}
        .heading-five {}
        .heading-six {}
        p {}
        a {}
        .huge-text {}
        .large-text {}
        .medium-text {}
        .small-text {}
        .quote-text {}
        .link-text {}
        .nav-text {}
        .breadcrumbs {}

    </style>
    <!-- Customizer Styles [END] -->



</head>
<!-- Head [END] -->



<!-- Body
============================================= -->
<body <?php body_class('stretched no-transition'); ?> >



    <!-- Google Analytics Async
    ============================================= -->
    <!-- update XXXXX with the GA id -->
    <script>
        window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview');
    </script>
    <script async src='https://www.google-analytics.com/analytics.js'></script>
    <!-- Google Analytics Async [END] -->




	<!-- Skip to Main Content Btn
    ============================================= -->
    <a class="e-reader-only" href="#main-content">Skip to main content</a>
    <!-- Skip to Main Content Btn [END] -->




    <!-- Cookie Banner
    ============================================= -->
    <?php get_template_part( 'partials/layout/cookie-banner' ); ?>
    <!-- Cookie Banner [END] -->




    <!-- Email Popup
    ============================================= -->
    <?php get_template_part( 'partials/reusables/popup', 'email' ); ?>
    <!-- Email Popup [END] -->




    <!-- Top Bar
    ============================================= -->
    <?php get_template_part( 'partials/layout/top-bar' ); ?>
    <!-- Top Bar [END] -->


