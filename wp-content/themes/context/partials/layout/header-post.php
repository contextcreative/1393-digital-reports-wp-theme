<div class="header--post">
	<div class="wrapper">
		<!-- Breadcrumbs
	    ============================================= -->
	    <div class="row">
	    	<div class="col-xs-12">
	    		<?php 

				    if( is_front_page() ) {
				    	echo '<ul class="breadcrumbs"><li>';
				    	echo get_bloginfo( 'name' );
				    	echo '</li></ul>';
				    } else {
				    	breadcrumbs();
				    } 

			    ?>
	    	</div>
	    </div>




	    <!-- IMPORTANT: include clear float below every row -->
        <div class="clear-float"></div>




	    <!-- Content
	    ============================================= -->
	    <div class="row">
	    	<div class="col-xs-12 col-sm-8">
	    		<h1 class="heading-one"><?php single_post_title(); ?></h1>
				<p class="large-text"><?php echo strip_tags( get_the_excerpt() ); ?></p>
	    	</div>
	    </div>




	    <!-- IMPORTANT: include clear float below every row -->
        <div class="clear-float"></div>




		<!-- Post View Counter + Output
			 * IMPORTANT:
			 * Keep the template part in to track page views even if we aren't going to display them. 
			 * Allows for sort by most popular functionailty in filters
	    ============================================= -->
		<?php
			if( get_post_type($post) == 'post' ){
				echo '<span style="padding: 5px; background: darkkhaki; font-size: 15px; display: block; color: #000;">Page Views:';
				echo context_get_post_view();
				echo '</span>';
			}
		?>
	</div>
</div>