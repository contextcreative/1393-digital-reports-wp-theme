<?php

	function context_customize_register( $wp_customize ){
		// echo '<pre>';
		// var_dump( $wp_customize );
		// echo '</pre>';


		// grab the "site idenity" section 
		// after a settings has been created it gets converted into an object with methods. so to edit the already existing sections that is out-of-the-box from wp, you have to treate them like properties. 
		// $wp_customize->get_section( 'title_tagline' )->title		= 'General';



		/* Custom Panels in the Customizer
        ============================================= */
		$wp_customize->add_panel( 'context-panel', [
			'title'					=>	__( 'Context Custom Panel', 'context' ),
			'description'			=> '<p>Context Theme Settings</p>',
			'priority'				=>	160
		] );

		$wp_customize->add_panel( 'font-panel', [
			'title'					=>	__( 'Fonts', 'context' ),
			'description'			=> '<p>Font Theme Settings</p>',
			'priority'				=>	160
		] );


		/* Custom Customizer Sections
        ============================================= */
        context_colours_customizer_section( $wp_customize );
		context_social_customizer_section( $wp_customize );
		context_misc_customizer_section( $wp_customize );
		context_footer_customizer_section( $wp_customize );
		context_fonts_imports_customizer_section( $wp_customize );
		context_fonts_globals_customizer_section( $wp_customize );
		context_fonts_title_sizes_customizer_section( $wp_customize );
		context_fonts_title_weights_customizer_section( $wp_customize );
		// context_topbar_customizer_section( $wp_customize );
	}


?>