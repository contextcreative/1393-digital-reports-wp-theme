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
        $contextFontImport          = get_theme_mod( 'context_font_import' );
        $globalFontFamily           = get_theme_mod( 'context_global_font_family' );
        $globalTitlesFontFamily     = get_theme_mod( 'context_global_titles_font_family' );

        $globalFontColor            = get_theme_mod( 'context_global_font_color' );
        $globalTitlesFontColor      = get_theme_mod( 'context_global_titles_font_color' );
        $globalLinksFontColor       = get_theme_mod( 'context_global_links_font_color' );

        $headingOneSize             = get_theme_mod( 'context_h1_size' );
        $headingTwoSize             = get_theme_mod( 'context_h2_size' );
        $headingThreeSize           = get_theme_mod( 'context_h3_size' );
        $headingFourSize            = get_theme_mod( 'context_h4_size' );
        $headingFiveSize            = get_theme_mod( 'context_h5_size' );
        $headingSixSize             = get_theme_mod( 'context_h6_size' );

        $headingOneWeight           = get_theme_mod( 'context_h1_weight' );
        $headingTwoWeight           = get_theme_mod( 'context_h2_weight' );
        $headingThreeWeight         = get_theme_mod( 'context_h3_weight' );
        $headingFourWeight          = get_theme_mod( 'context_h4_weight' );
        $headingFiveWeight          = get_theme_mod( 'context_h5_weight' );
        $headingSixWeight           = get_theme_mod( 'context_h6_weight' );
    ?>
    <style>
        <?php if ( $contextFontImport ) { ?>
            @import url(<?php echo $contextFontImport; ?>);
        <?php } ?>



        :root {
            /* font families */
            <?php if ( $globalFontFamily ) { ?> 
                --font-family: <?php echo $globalFontFamily; ?>; 
            <?php } ?>
            <?php if ( $globalTitlesFontFamily ) { ?> 
                --font-family-titles: <?php echo $globalTitlesFontFamily; ?>; 
            <?php } else { ?>
                --font-family-titles: <?php echo $globalFontFamily; ?>; 
            <?php } ?>



            /* font colors */
            <?php if ( $globalFontColor ) { ?> 
                --font-color-primary: <?php echo $globalFontColor; ?>; 
            <?php } ?>
            <?php if ( $globalTitlesFontColor ) { ?> 
                --font-color-titles: <?php echo $globalTitlesFontColor; ?>; 
            <?php } ?>
            <?php if ( $globalLinksFontColor ) { ?> 
                --font-color-links: <?php echo $globalLinksFontColor; ?>; 
            <?php } ?>



            /* title sizes */
            <?php if ( $headingOneSize ) { ?> 
            --heading-one-size: <?php echo $headingOneSize; ?>rem;
            <?php } ?>
            <?php if ( $headingTwoSize ) { ?> 
            --heading-two-size: <?php echo $headingTwoSize; ?>rem;
            <?php } ?>
            <?php if ( $headingThreeSize ) { ?> 
            --heading-three-size: <?php echo $headingThreeSize; ?>rem;
            <?php } ?>
            <?php if ( $headingFourSize ) { ?> 
            --heading-four-size: <?php echo $headingFourSize; ?>rem;
            <?php } ?>
            <?php if ( $headingFiveSize ) { ?> 
            --heading-five-size: <?php echo $headingFiveSize; ?>rem;
            <?php } ?>
            <?php if ( $headingSixSize ) { ?> 
            --heading-six-size: <?php echo $headingSixSize; ?>rem;
            <?php } ?>



            /* title weights */
            <?php if ( $headingOneWeight ) { ?> 
            --heading-one-weight: <?php echo $headingOneWeight; ?>rem;
            <?php } ?>
            <?php if ( $headingTwoWeight ) { ?> 
            --heading-two-weight: <?php echo $headingTwoWeight; ?>rem;
            <?php } ?>
            <?php if ( $headingThreeWeight ) { ?> 
            --heading-three-weight: <?php echo $headingThreeWeight; ?>rem;
            <?php } ?>
            <?php if ( $headingFourWeight ) { ?> 
            --heading-four-weight: <?php echo $headingFourWeight; ?>rem;
            <?php } ?>
            <?php if ( $headingFiveWeight ) { ?> 
            --heading-five-weight: <?php echo $headingFiveWeight; ?>rem;
            <?php } ?>
            <?php if ( $headingSixWeight ) { ?> 
            --heading-six-weight: <?php echo $headingSixWeight; ?>rem;
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


