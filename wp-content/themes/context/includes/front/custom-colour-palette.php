<?php


	/* Add custom color palettes to wp colour picker
	 *
	 * Source: https://wordpress.org/support/topic/change-color-picker-palette-in-functions-php-with-my-own-scheme/
	============================================= */
	function context_custom_color_palettes() {


		/* Get colours from 
		============================================= */
		$primary		=	get_theme_mod( 'context_colours_primary' );
		$secondary		=	get_theme_mod( 'context_colours_secondary' );
		$text_primary	=	get_theme_mod( 'context_colours_text_primary' );
		$text_secondary	=	get_theme_mod( 'context_colours_text_secondary' );
		$link_primary	=	get_theme_mod( 'context_colours_link_primary' );
		$link_secondary	=	get_theme_mod( 'context_colours_link_secondary' );
		$additional_one	=	get_theme_mod( 'context_colours_additional_one' );
		$additional_two	=	get_theme_mod( 'context_colours_additional_two' );


		/* Color Palette
		============================================= */
		$color_palettes = json_encode(
			array(
				$primary,
				$secondary,
				$text_primary,
				$text_secondary,
				$link_primary,
				$link_secondary,
				$additional_one,
				$additional_two,
			)
		);
		wp_add_inline_script( 'wp-color-picker', 'jQuery.wp.wpColorPicker.prototype.options.palettes = ' . $color_palettes . ';' );
	}

?>