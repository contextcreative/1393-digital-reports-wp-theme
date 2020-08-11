<?php

	function context_fonts_title_colors_customizer_section( $wp_customize ){

		/* Font Settings
         * For each field you want in the customizer you need to set up an instance
         *
         * $wp_customize->add_setting($id, $args);
         *
         * More Info: https://codex.wordpress.org/Class_Reference%5CWP_Customize_Manager%5Cadd_setting
        ============================================= */
		$wp_customize->add_setting( 'context_h1_color', [
			'default'			=>	''
		] );

		$wp_customize->add_setting( 'context_h2_color', [
			'default'			=>	''
		] );

		$wp_customize->add_setting( 'context_h3_color', [
			'default'			=>	''
		] );

		$wp_customize->add_setting( 'context_h4_color', [
			'default'			=>	''
		] );

		$wp_customize->add_setting( 'context_h5_color', [
			'default'			=>	''
		] );

		$wp_customize->add_setting( 'context_h6_color', [
			'default'			=>	''
		] );



		/* Social Section
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
		$wp_customize->add_section( 'context_fonts_title_colors_section', [
            'title'             =>  __( 'Title Colors', 'context' ),
            'priority'          =>  30,
            'panel'             => 'font-panel'
        ] );



		/* Social Controls
         * Create the input fields for the settings to allow customization
         * Default 'type' is text
         * 
         * $wp_customize->add_control($id, $args);
         *
         * More Info: https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_control
        ============================================= */
        $wp_customize->add_control( new WP_Customize_Color_Control(
            $wp_customize,
            'context_h1_color_input',
            array(
                'label'         =>  __( 'Heading One Color', 'context' ),
                'section'       =>  'context_fonts_title_colors_section',
                'settings'      =>  'context_h1_color',
				'description' 	=> __( 'Applied to all heading-one class elements' ),
            )
        ) );

		$wp_customize->add_control( new WP_Customize_Color_Control(
            $wp_customize,
            'context_h2_color_input',
            array(
                'label'         =>  __( 'Heading Two Color', 'context' ),
                'section'       =>  'context_fonts_title_colors_section',
                'settings'      =>  'context_h2_color',
				'description' 	=> __( 'Applied to all heading-two class elements' ),
            )
        ) );

        $wp_customize->add_control( new WP_Customize_Color_Control(
            $wp_customize,
            'context_h3_color_input',
            array(
                'label'         =>  __( 'Heading Three Color', 'context' ),
                'section'       =>  'context_fonts_title_colors_section',
                'settings'      =>  'context_h3_color',
				'description' 	=> __( 'Applied to all heading-three class elements' ),
            )
        ) );

        $wp_customize->add_control( new WP_Customize_Color_Control(
            $wp_customize,
            'context_h4_color_input',
            array(
                'label'         =>  __( 'Heading Four Color', 'context' ),
                'section'       =>  'context_fonts_title_colors_section',
                'settings'      =>  'context_h4_color',
				'description' 	=> __( 'Applied to all heading-four class elements' ),
            )
        ) );

        $wp_customize->add_control( new WP_Customize_Color_Control(
            $wp_customize,
            'context_h5_color_input',
            array(
                'label'         =>  __( 'Heading Five Color', 'context' ),
                'section'       =>  'context_fonts_title_colors_section',
                'settings'      =>  'context_h5_color',
				'description' 	=> __( 'Applied to all heading-five class elements' ),
            )
        ) );

        $wp_customize->add_control( new WP_Customize_Color_Control(
            $wp_customize,
            'context_h6_color_input',
            array(
                'label'         =>  __( 'Heading Six Color', 'context' ),
                'section'       =>  'context_fonts_title_colors_section',
                'settings'      =>  'context_h6_color',
				'description' 	=> __( 'Applied to all heading-six class elements' ),
            )
        ) );
	}

?>