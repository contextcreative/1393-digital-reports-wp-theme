<!-- Head
============================================= -->
<?php get_header(); ?>


    <!-- Header
    ============================================= -->
    <?php get_template_part( 'partials/layout/header', 'category' ); ?>


    <!-- Content
    ============================================= -->
    <section id="main-content" style="padding: 30px; background: steelblue;">
        
        <div class="row">

            <main class="page-content col-xs-8" style="padding: 30px; background: lightsteelblue;">


                <!-- Posts
                ============================================= -->
                <?php get_template_part( 'partials/reusables/posts' ); ?>



                <!-- Pagination
                ============================================= -->
                <?php get_template_part( 'partials/reusables/pagination-posts' ); ?>


            </main>


            <!-- Sidebar
            ============================================= -->
            <?php get_sidebar(); ?>

            
        </div>

        <!-- IMPORTANT: include clear float below every row -->
        <div class="clear-float"></div> 

    </section>
    <!-- Content [END] -->


<!-- Footer
============================================= -->
<?php get_footer(); ?>