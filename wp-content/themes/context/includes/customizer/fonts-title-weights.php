<?php

	function context_fonts_title_weights_customizer_section( $wp_customize ){

		/* Font Settings
         * For each field you want in the customizer you need to set up an instance
         *
         * $wp_customize->add_setting($id, $args);
         *
         * More Info: https://codex.wordpress.org/Class_Reference%5CWP_Customize_Manager%5Cadd_setting
        ============================================= */
		$wp_customize->add_setting( 'context_h1_weight', [
			'default'			=>	'800'
		] );

		$wp_customize->add_setting( 'context_h2_weight', [
			'default'			=>	'700'
		] );

		$wp_customize->add_setting( 'context_h3_weight', [
			'default'			=>	'700'
		] );

		$wp_customize->add_setting( 'context_h4_weight', [
			'default'			=>	'700'
		] );

		$wp_customize->add_setting( 'context_h5_weight', [
			'default'			=>	'700'
		] );

		$wp_customize->add_setting( 'context_h6_weight', [
			'default'			=>	'700'
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
		$wp_customize->add_section( 'context_fonts_title_weights_section', [
            'title'             =>  __( 'Title Weights', 'context' ),
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
			'context_h1_weight_input',
			array(
				'label'			=> __( 'Heading One Weight', 'context' ),
				'section'		=> 'context_fonts_title_weights_section',
				'settings'		=> 'context_h1_weight',
				'type'			=> 'number',
				'description' 	=> __( 'This weight will be applied to all elements with the class name "heading-one". Font weights are measured in alignment with font weights selected in import.' ),
			)
		) );

		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'context_h2_weight_input',
			array(
				'label'			=> __( 'Heading Two Weight', 'context' ),
				'section'		=> 'context_fonts_title_weights_section',
				'settings'		=> 'context_h2_weight',
				'type'			=> 'number',
				'description' 	=> __( 'This weight will be applied to all elements with the class name "heading-two". Font weights are measured in alignment with font weights selected in import.' ),
			)
		) );

		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'context_h3_weight_input',
			array(
				'label'			=> __( 'Heading Three Weight', 'context' ),
				'section'		=> 'context_fonts_title_weights_section',
				'settings'		=> 'context_h3_weight',
				'type'			=> 'number',
				'description' 	=> __( 'This weight will be applied to all elements with the class name "heading-three". Font weights are measured in alignment with font weights selected in import.' ),
			)
		) );

		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'context_h4_weight_input',
			array(
				'label'			=> __( 'Heading Four Weight', 'context' ),
				'section'		=> 'context_fonts_title_weights_section',
				'settings'		=> 'context_h4_weight',
				'type'			=> 'number',
				'description' 	=> __( 'This weight will be applied to all elements with the class name "heading-four". Font weights are measured in alignment with font weights selected in import.' ),
			)
		) );

		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'context_h5_weight_input',
			array(
				'label'			=> __( 'Heading Five Weight', 'context' ),
				'section'		=> 'context_fonts_title_weights_section',
				'settings'		=> 'context_h5_weight',
				'type'			=> 'number',
				'description' 	=> __( 'This weight will be applied to all elements with the class name "heading-five". Font weights are measured in alignment with font weights selected in import.' ),
			)
		) );

		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'context_h6_weight_input',
			array(
				'label'			=> __( 'Heading Six Weight', 'context' ),
				'section'		=> 'context_fonts_title_weights_section',
				'settings'		=> 'context_h6_weight',
				'type'			=> 'number',
				'description' 	=> __( 'This weight will be applied to all elements with the class name "heading-six". Font weights are measured in alignment with font weights selected in import.' ),
			)
		) );
	}

?>