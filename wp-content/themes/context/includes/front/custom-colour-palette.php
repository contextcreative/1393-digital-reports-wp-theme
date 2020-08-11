<?php


	/* Add custom color palettes to wp colour picker
	 *
	 * Source: https://wordpress.org/support/topic/change-color-picker-palette-in-functions-php-with-my-own-scheme/
	============================================= */
	function context_custom_color_palettes() {


		/* Get colours from 
		============================================= */
		$color_one		=	get_theme_mod( 'context_colours_one' );
		$color_two		=	get_theme_mod( 'context_colours_two' );
		$color_three	=	get_theme_mod( 'context_colours_three' );
		$color_four		=	get_theme_mod( 'context_colours_four' );
		$color_five		=	get_theme_mod( 'context_colours_five' );
		$color_six		=	get_theme_mod( 'context_colours_six' );
		$color_seven	=	get_theme_mod( 'context_colours_seven' );
		$color_eight	=	get_theme_mod( 'context_colours_eight' );


		/* Color Palette
		============================================= */
		$color_palettes = json_encode(
			array(
				$color_one,
				$color_two,
				$color_three,
				$color_four,
				$color_five,
				$color_six,
				$color_seven,
				$color_eight,
			)
		);
		wp_add_inline_script( 'wp-color-picker', 'jQuery.wp.wpColorPicker.prototype.options.palettes = ' . $color_palettes . ';' );
	}

?>