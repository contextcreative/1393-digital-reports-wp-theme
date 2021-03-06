<!-- Head
============================================= -->
<?php get_header(); ?>


	<!-- Header
    ============================================= -->
    <?php get_template_part( 'partials/layout/header', 'post' ); ?>



	<!-- Content
	============================================= -->
	<section id="main-content">
		<div class="wrapper">




			<div class="row">
			

				<!-- Page Content
				============================================= -->
				<main class="post-content col-xs-12">


					
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-4">
							


							<div class="sign-off">
								
							</div>



						</div>
					</div>	

























					<?php 
						while( have_posts() ){
							the_post();

							global $post;
							$author_ID		= $post->post_author;
							$author_URL		= get_author_posts_url( $author_ID );

							?>


							<!-- Page Content Content
							============================================= -->
							<div class="post-content__content">
								<?php the_content(); ?>

								<!-- wp_link_pages
								============================================= -->
								<?php get_template_part( 'partials/functions/wp-link-pages' ); ?>
								<!-- wp_link_pages [END] -->
								
							</div>
							<!-- Page Content Content [END] -->



							<!-- Comments
							============================================= -->
							<?php 
								if( comments_open() || get_comments_number() ){
									comments_template(); 
								}
							?>
							<!-- Comments [END] -->

							<?php
						}

					 ?>

				</main>
				<!-- Page Content [END] -->

				<?php /* get_sidebar(); */ ?>

				
			</div>

	        <!-- IMPORTANT: include clear float below every row -->
	        <div class="clear-float"></div> 




		</div> <!-- Wrapper [END] -->
	</section>
	<!-- Content [END] -->

<!-- Footer
============================================= -->
<?php get_footer(); ?>