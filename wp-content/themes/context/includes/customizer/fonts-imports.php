<?php

	function context_fonts_imports_customizer_section( $wp_customize ){

		/* Font Settings
         * For each field you want in the customizer you need to set up an instance
         *
         * $wp_customize->add_setting($id, $args);
         *
         * More Info: https://codex.wordpress.org/Class_Reference%5CWP_Customize_Manager%5Cadd_setting
        ============================================= */
		$wp_customize->add_setting( 'context_font_import', [
			'default'			=>	'https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=block'
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
		$wp_customize->add_section( 'context_fonts_imports_section', [
            'title'             =>  __( 'Global Font Imports', 'context' ),
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
			'context_font_import_input',
			array(
				'label'			=> __( 'Font Import', 'context' ),
				'section'		=> 'context_fonts_imports_section',
				'settings'		=> 'context_font_import',
				'type'			=> 'text',
				'description' => __( 'If you are using Google Fonts/Typekit you must include the @import url. If you have any questions please as a developer and we will be happy to help. If you are using more than one font from Google Fonts/Typekit please combine the import urls or speak to a developer to assist you.' ),
			)
		) );

	}

?>