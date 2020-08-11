<?php

	function context_fonts_pullquote_customizer_section( $wp_customize ){

		/* Font Settings
         * For each field you want in the customizer you need to set up an instance
         *
         * $wp_customize->add_setting($id, $args);
         *
         * More Info: https://codex.wordpress.org/Class_Reference%5CWP_Customize_Manager%5Cadd_setting
        ============================================= */
		$wp_customize->add_setting( 'context_pullquote_family', [
			'default'			=>	''
		] );

		$wp_customize->add_setting( 'context_pullquote_size', [
			'default'			=>	''
		] );

		$wp_customize->add_setting( 'context_pullquote_weight', [
			'default'			=>	''
		] );

		$wp_customize->add_setting( 'context_pullquote_color', [
			'default'			=>	''
		] );

		$wp_customize->add_setting( 'context_pullquote_alignment', [
			'default'			=>	'Left'
		] );

		$wp_customize->add_setting( 'context_pullquote_text_transform', [
			'default'			=>	'Initial'
		] );

		$wp_customize->add_setting( 'context_pullquote_line_height', [
			'default'			=>	'1'
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
		$wp_customize->add_section( 'context_fonts_pullquote_section', [
            'title'             =>  __( 'Pullquote Styles', 'context' ),
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
			'context_pullquote_family_input',
			array(
				'label'			=> __( 'Pullquote Family', 'context' ),
				'section'		=> 'context_fonts_pullquote_section',
				'settings'		=> 'context_pullquote_family',
				'type'			=> 'text',
				'description' 	=> __( 'Applied to all quote blocks within the editor. If left empty it will default to title font family if specified' ),
			)
		) );

		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'context_pullquote_size_input',
			array(
				'label'			=> __( 'Pullquote Size', 'context' ),
				'section'		=> 'context_fonts_pullquote_section',
				'settings'		=> 'context_pullquote_size',
				'type'			=> 'number',
				'description' 	=> __( 'Applied to all quote blocks within the editor. Font sizes are measured in REMs. 1rem = 16px' ),
			)
		) );

		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'context_pullquote_weight_input',
			array(
				'label'			=> __( 'Pullquote Weight', 'context' ),
				'section'		=> 'context_fonts_pullquote_section',
				'settings'		=> 'context_pullquote_weight',
				'type'			=> 'number',
				'description' 	=> __( 'Applied to all quote blocks within the editor. Font weights are measured in alignment with font weights selected in import.' ),
			)
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control(
            $wp_customize,
            'context_pullquote_color_input',
            array(
                'label'         =>  __( 'Pullquote Color', 'context' ),
                'section'       =>  'context_fonts_pullquote_section',
                'settings'      =>  'context_pullquote_color',
				'description' 	=> __( 'Applied to all quote blocks within the editor.' ),
            )
        ) );

        $wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'context_pullquote_alignment_input',
			array(
				'label'			=> __( 'Pullquote Alignment', 'context' ),
				'section'		=> 'context_fonts_pullquote_section',
				'settings'		=> 'context_pullquote_alignment',
				'type'			=> 'select',
				'choices'		=>	array(
					'left'		=>	__( 'Left' ),
					'center'	=>	__( 'Centered' ),
					'right'		=>	__( 'Right' ),
					'justify'	=>	__( 'Justify' ),
				),
				'description' 	=> __( 'Applied to all quote blocks within the editor.' ),
			)
		) );

		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'context_pullquote_text_transform_input',
			array(
				'label'			=> __( 'Pullquote Text Transform', 'context' ),
				'section'		=> 'context_fonts_pullquote_section',
				'settings'		=> 'context_pullquote_text_transform',
				'type'			=> 'select',
				'choices'		=>	array(
					'initial'	=>	__( 'Initial' ),
					'uppercase'	=>	__( 'Uppercase' ),
					'lowercase'	=>	__( 'Lowercase' ),
					'capitalize'=>	__( 'Capitalize' ),
				),
				'description' 	=> __( 'Applied to all quote blocks within the editor.' ),
			)
		) );

		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'context_pullquote_line_height_input',
			array(
				'label'			=> __( 'Pullquote Line Height', 'context' ),
				'section'		=> 'context_fonts_pullquote_section',
				'settings'		=> 'context_pullquote_line_height',
				'type'			=> 'number',
				'description' 	=> __( 'Applied to all quote blocks within the editor. Line height is measured mesured in one decimal numbers. Example: 120% = 1.2' ),
			)
		) );
	}

?>