<?php

	function context_fonts_globals_customizer_section( $wp_customize ){

		/* Font Settings
         * For each field you want in the customizer you need to set up an instance
         *
         * $wp_customize->add_setting($id, $args);
         *
         * More Info: https://codex.wordpress.org/Class_Reference%5CWP_Customize_Manager%5Cadd_setting
        ============================================= */
		$wp_customize->add_setting( 'context_global_font_family', [
			'default'			=>	''
		] );


		$wp_customize->add_setting( 'context_global_titles_font_family', [
			'default'			=>	''
		] );


		$wp_customize->add_setting( 'context_global_font_color', [
			'default'			=>	''
		] );


		$wp_customize->add_setting( 'context_global_titles_font_color', [
			'default'			=>	''
		] );

		$wp_customize->add_setting( 'context_global_links_font_color', [
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
		$wp_customize->add_section( 'context_fonts_globals_section', [
            'title'             =>  __( 'Global Font Settings', 'context' ),
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
		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'context_global_font_family_input',
			array(
				'label'			=> __( 'Global Font Family', 'context' ),
				'section'		=> 'context_fonts_globals_section',
				'settings'		=> 'context_global_font_family',
				'type'			=> 'text',
				'description' 	=> __( 'Applied to all text elements unless otherwise specified' ),
			)
		) );

		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'context_global_titles_font_family_input',
			array(
				'label'			=> __( 'Global Titles Font Family', 'context' ),
				'section'		=> 'context_fonts_globals_section',
				'settings'		=> 'context_global_titles_font_family',
				'type'			=> 'text',
				'description' 	=> __( 'Applied to all title elements unless otherwise specified. If not filled, titles will default to above font family.' ),
			)
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control(
            $wp_customize,
            'context_global_font_color_input',
            array(
                'label'         =>  __( 'Global Font Color', 'context' ),
                'section'       =>  'context_fonts_globals_section',
                'settings'      =>  'context_global_font_color',
				'description' 	=> __( 'Applied to all text elements unless otherwise specified' ),
            )
        ) );

        $wp_customize->add_control( new WP_Customize_Color_Control(
            $wp_customize,
            'context_global_titles_font_color_input',
            array(
                'label'         =>  __( 'Global Titles Font Color', 'context' ),
                'section'       =>  'context_fonts_globals_section',
                'settings'      =>  'context_global_titles_font_color',
				'description' 	=> __( 'Applied to all title elements unless otherwise specified. If not filled, titles will default to above color.' ),
            )
        ) );


        $wp_customize->add_control( new WP_Customize_Color_Control(
            $wp_customize,
            'context_global_links_font_color_input',
            array(
                'label'         =>  __( 'Global Links Font Color', 'context' ),
                'section'       =>  'context_fonts_globals_section',
                'settings'      =>  'context_global_links_font_color',
				'description' 	=> __( 'Applied to all link elements unless otherwise specified.' ),
            )
        ) );
	}

?>