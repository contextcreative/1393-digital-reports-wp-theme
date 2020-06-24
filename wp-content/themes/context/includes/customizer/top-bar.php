<?php

        function context_topbar_customizer_section( $wp_customize ){

        /* Top Bar Settings
         * For each field you want in the customizer you need to set up an instance
         *
         * $wp_customize->add_setting($id, $args);
         *
         * More Info: https://codex.wordpress.org/Class_Reference%5CWP_Customize_Manager%5Cadd_setting
        ============================================= */
        $wp_customize->add_setting( 'context_topbar_background', [
           'default'            =>  '#fff',
        ] );

        $wp_customize->add_setting( 'context_topbar_logo_size', [
           'default'            =>  100,
        ] );



        /* Top Bar Section
         * Create the section which the settings will live
         * The higher the priority the lower in the customize panel list
         * Needs to be called in an add_action( 'customize_register', 'ID' ); to be displayed
         *
         * function mytheme_add_section( $wp_customize ) {
                $wp_customize->add_section($id, $args);
           }
           add_action( 'customize_register', 'mytheme_add_section' );
         *
         * More Info: https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_section
        ============================================= */
        $wp_customize->add_section( 'context_topbar_section', [
            'title'             =>  __( 'Top Bar Settings', 'context' ),
            'priority'          =>  30,
            'panel'             => 'context-panel'
        ] );



        /* Top Bar Controls
         * Create the input fields for the settings to allow customization
         * Default 'type' is text
         * 
         * $wp_customize->add_control($id, $args);
         *
         * More Info: https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_control
        ============================================= */
        $wp_customize->add_control( new WP_Customize_Color_Control(
            $wp_customize,
            'context_topbar_background_input',
            array(
                'label'         =>  __( 'Top bar background', 'context' ),
                'section'       =>  'context_topbar_section',
                'settings'      =>  'context_topbar_background',
            )
        ) );

        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'context_topbar_logo_size_input',
            array(
                'label'         =>  __( 'Max pixel width for site logo', 'context' ),
                'section'       =>  'context_topbar_section',
                'settings'      =>  'context_topbar_logo_size',
                'type'          =>  'number',
            )
        ) );
    }

?>