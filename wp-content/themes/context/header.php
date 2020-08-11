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

        $headingOneColor            = get_theme_mod( 'context_h1_color' );
        $headingTwoColor            = get_theme_mod( 'context_h2_color' );
        $headingThreeColor          = get_theme_mod( 'context_h3_color' );
        $headingFourColor           = get_theme_mod( 'context_h4_color' );
        $headingFiveColor           = get_theme_mod( 'context_h5_color' );
        $headingSixColor            = get_theme_mod( 'context_h6_color' );

        $blockquoteFamily           = get_theme_mod( 'context_blockquote_family' );
        $blockquoteSize             = get_theme_mod( 'context_blockquote_size' );
        $blockquoteWeight           = get_theme_mod( 'context_blockquote_weight' );
        $blockquoteColor            = get_theme_mod( 'context_blockquote_color' );
        $blockquoteAlignment        = get_theme_mod( 'context_blockquote_alignment' );
        $blockquoteTransform        = get_theme_mod( 'context_blockquote_text_transform' );
        $blockquoteLineHeight       = get_theme_mod( 'context_blockquote_line_height' );

        $pullquoteFamily            = get_theme_mod( 'context_pullquote_family' );
        $pullquoteSize              = get_theme_mod( 'context_pullquote_size' );
        $pullquoteWeight            = get_theme_mod( 'context_pullquote_weight' );
        $pullquoteColor             = get_theme_mod( 'context_pullquote_color' );
        $pullquoteAlignment         = get_theme_mod( 'context_pullquote_alignment' );
        $pullquoteTransform         = get_theme_mod( 'context_pullquote_text_transform' );
        $pullquoteLineHeight        = get_theme_mod( 'context_pullquote_line_height' );

        $citeFamily                 = get_theme_mod( 'context_cite_family' );
        $citeSize                   = get_theme_mod( 'context_cite_size' );
        $citeWeight                 = get_theme_mod( 'context_cite_weight' );
        $citeColor                  = get_theme_mod( 'context_cite_color' );
        $citeAlignment              = get_theme_mod( 'context_cite_alignment' );
        $citeTransform              = get_theme_mod( 'context_cite_text_transform' );
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
                --heading-one-weight: <?php echo $headingOneWeight; ?>;
            <?php } ?>
            <?php if ( $headingTwoWeight ) { ?> 
                --heading-two-weight: <?php echo $headingTwoWeight; ?>;
            <?php } ?>
            <?php if ( $headingThreeWeight ) { ?> 
                --heading-three-weight: <?php echo $headingThreeWeight; ?>;
            <?php } ?>
            <?php if ( $headingFourWeight ) { ?> 
                --heading-four-weight: <?php echo $headingFourWeight; ?>;
            <?php } ?>
            <?php if ( $headingFiveWeight ) { ?> 
                --heading-five-weight: <?php echo $headingFiveWeight; ?>;
            <?php } ?>
            <?php if ( $headingSixWeight ) { ?> 
                --heading-six-weight: <?php echo $headingSixWeight; ?>;
            <?php } ?>



            /* title colors */
            <?php if ( $headingOneColor ) { ?> 
                --heading-one-color: <?php echo $headingOneColor; ?>;
            <?php } else if ( $globalTitlesFontColor ) { ?>
                --heading-one-color: <?php echo $globalTitlesFontColor; ?>;
            <?php } else { ?>
                --heading-one-color: <?php echo $globalFontColor; ?>;
            <?php } ?>

            <?php if ( $headingTwoColor ) { ?> 
                --heading-two-color: <?php echo $headingTwoColor; ?>;
            <?php } else if ( $globalTitlesFontColor ) { ?>
                --heading-two-color: <?php echo $globalTitlesFontColor; ?>;
            <?php } else { ?>
                --heading-two-color: <?php echo $globalFontColor; ?>;
            <?php } ?>

            <?php if ( $headingThreeColor ) { ?> 
                --heading-three-color: <?php echo $headingThreeColor; ?>;
            <?php } else if ( $globalTitlesFontColor ) { ?>
                --heading-three-color: <?php echo $globalTitlesFontColor; ?>;
            <?php } else { ?>
                --heading-three-color: <?php echo $globalFontColor; ?>;
            <?php } ?>

            <?php if ( $headingFourColor ) { ?> 
                --heading-four-color: <?php echo $headingFourColor; ?>;
            <?php } else if ( $globalTitlesFontColor ) { ?>
                --heading-four-color: <?php echo $globalTitlesFontColor; ?>;
            <?php } else { ?>
                --heading-four-color: <?php echo $globalFontColor; ?>;
            <?php } ?>

            <?php if ( $headingFiveColor ) { ?> 
                --heading-five-color: <?php echo $headingFiveColor; ?>;
            <?php } else if ( $globalTitlesFontColor ) { ?>
                --heading-five-color: <?php echo $globalTitlesFontColor; ?>;
            <?php } else { ?>
                --heading-five-color: <?php echo $globalFontColor; ?>;
            <?php } ?>
            
            <?php if ( $headingSixColor ) { ?> 
                --heading-six-color: <?php echo $headingSixColor; ?>;
            <?php } else if ( $globalTitlesFontColor ) { ?>
                --heading-six-color: <?php echo $globalTitlesFontColor; ?>;
            <?php } else { ?>
                --heading-six-color: <?php echo $globalFontColor; ?>;
            <?php } ?>


            /* blockquote style */
            <?php if ( $blockquoteFamily ) { ?> 
                --blockquote-family: <?php echo $blockquoteFamily; ?>;
            <?php } else { ?>
                --blockquote-family: <?php echo $globalFontFamily; ?>;
            <?php } ?>
            <?php if ( $blockquoteSize ) { ?> 
                --blockquote-size: <?php echo $blockquoteSize; ?>rem;
            <?php } ?>
            <?php if ( $blockquoteWeight ) { ?> 
                --blockquote-weight: <?php echo $blockquoteWeight; ?>;
            <?php } ?>
            <?php if ( $blockquoteColor ) { ?> 
                --blockquote-color: <?php echo $blockquoteColor; ?>;
            <?php } ?>
            <?php if ( $blockquoteAlignment ) { ?> 
                --blockquote-alignment: <?php echo $blockquoteAlignment; ?>;
            <?php } ?>
            <?php if ( $blockquoteTransform ) { ?> 
                --blockquote-text-transform: <?php echo $blockquoteTransform; ?>;
            <?php } ?>
            <?php if ( $blockquoteLineHeight ) { ?> 
                --blockquote-line-height: <?php echo $blockquoteLineHeight; ?>;
            <?php } ?>


            /* pullquote style */
            <?php if ( $pullquoteFamily ) { ?> 
                --pullquote-family: <?php echo $pullquoteFamily; ?>;
            <?php } else { ?>
                --pullquote-family: <?php echo $globalTitlesFontFamily; ?>;
            <?php } ?>
            <?php if ( $pullquoteSize ) { ?> 
                --pullquote-size: <?php echo $pullquoteSize; ?>rem;
            <?php } ?>
            <?php if ( $pullquoteWeight ) { ?> 
                --pullquote-weight: <?php echo $pullquoteWeight; ?>;
            <?php } ?>
            <?php if ( $pullquoteColor ) { ?> 
                --pullquote-color: <?php echo $pullquoteColor; ?>;
            <?php } ?>
            <?php if ( $pullquoteAlignment ) { ?> 
                --pullquote-alignment: <?php echo $pullquoteAlignment; ?>;
            <?php } ?>
            <?php if ( $pullquoteTransform ) { ?> 
                --pullquote-text-transform: <?php echo $pullquoteTransform; ?>;
            <?php } ?>
            <?php if ( $pullquoteLineHeight ) { ?> 
                --pullquote-line-height: <?php echo $pullquoteLineHeight; ?>;
            <?php } ?>


            /* cite style */
            <?php if ( $citeFamily ) { ?> 
                --cite-family: <?php echo $citeFamily; ?>;
            <?php } else { ?>
                --cite-family: <?php echo $globalFontFamily; ?>;
            <?php } ?>
            <?php if ( $citeSize ) { ?> 
                --cite-size: <?php echo $citeSize; ?>rem;
            <?php } ?>
            <?php if ( $citeWeight ) { ?> 
                --cite-weight: <?php echo $citeWeight; ?>;
            <?php } ?>
            <?php if ( $citeColor ) { ?> 
                --cite-color: <?php echo $citeColor; ?>;
            <?php } ?>
            <?php if ( $citeAlignment ) { ?> 
                --cite-alignment: <?php echo $citeAlignment; ?>;
            <?php } ?>
            <?php if ( $citeTransform ) { ?> 
                --cite-text-transform: <?php echo $citeTransform; ?>;
            <?php } ?>
        }

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


