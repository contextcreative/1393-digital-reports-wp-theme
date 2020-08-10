<?php

	function context_fonts_title_sizes_customizer_section( $wp_customize ){

		/* Font Settings
         * For each field you want in the customizer you need to set up an instance
         *
         * $wp_customize->add_setting($id, $args);
         *
         * More Info: https://codex.wordpress.org/Class_Reference%5CWP_Customize_Manager%5Cadd_setting
        ============================================= */
		$wp_customize->add_setting( 'context_h1_size', [
			'default'			=>	'4.5'
		] );

		$wp_customize->add_setting( 'context_h2_size', [
			'default'			=>	'3.375'
		] );

		$wp_customize->add_setting( 'context_h3_size', [
			'default'			=>	'1.75'
		] );

		$wp_customize->add_setting( 'context_h4_size', [
			'default'			=>	'1.5'
		] );

		$wp_customize->add_setting( 'context_h5_size', [
			'default'			=>	'1.125'
		] );

		$wp_customize->add_setting( 'context_h6_size', [
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
		$wp_customize->add_section( 'context_fonts_title_sizes_section', [
            'title'             =>  __( 'Title Sizes', 'context' ),
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
			'context_h1_size_input',
			array(
				'label'			=> __( 'Heading One Size', 'context' ),
				'section'		=> 'context_fonts_title_sizes_section',
				'settings'		=> 'context_h1_size',
				'type'			=> 'number',
				'description' 	=> __( 'This size will be applied to all elements with the class name "heading-one". Font sizes are measured in REMs. 1rem = 16px' ),
			)
		) );

		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'context_h2_size_input',
			array(
				'label'			=> __( 'Heading Two Size', 'context' ),
				'section'		=> 'context_fonts_title_sizes_section',
				'settings'		=> 'context_h2_size',
				'type'			=> 'number',
				'description' 	=> __( 'This size will be applied to all elements with the class name "heading-two". Font sizes are measured in REMs. 1rem = 16px' ),
			)
		) );

		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'context_h3_size_input',
			array(
				'label'			=> __( 'Heading Three Size', 'context' ),
				'section'		=> 'context_fonts_title_sizes_section',
				'settings'		=> 'context_h3_size',
				'type'			=> 'number',
				'description' 	=> __( 'This size will be applied to all elements with the class name "heading-three". Font sizes are measured in REMs. 1rem = 16px' ),
			)
		) );

		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'context_h4_size_input',
			array(
				'label'			=> __( 'Heading Four Size', 'context' ),
				'section'		=> 'context_fonts_title_sizes_section',
				'settings'		=> 'context_h4_size',
				'type'			=> 'number',
				'description' 	=> __( 'This size will be applied to all elements with the class name "heading-four". Font sizes are measured in REMs. 1rem = 16px' ),
			)
		) );

		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'context_h5_size_input',
			array(
				'label'			=> __( 'Heading Five Size', 'context' ),
				'section'		=> 'context_fonts_title_sizes_section',
				'settings'		=> 'context_h5_size',
				'type'			=> 'number',
				'description' 	=> __( 'This size will be applied to all elements with the class name "heading-five". Font sizes are measured in REMs. 1rem = 16px' ),
			)
		) );

		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'context_h6_size_input',
			array(
				'label'			=> __( 'Heading Six Size', 'context' ),
				'section'		=> 'context_fonts_title_sizes_section',
				'settings'		=> 'context_h6_size',
				'type'			=> 'number',
				'description' 	=> __( 'This size will be applied to all elements with the class name "heading-six". Font sizes are measured in REMs. 1rem = 16px' ),
			)
		) );
	}

?>