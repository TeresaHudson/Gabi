<?php /* Template Name: Contact Page Layout */ 
 
get_header(); ?>



    <div id="primary" class="content-area contact-page">
        <main id="main" class="site-main" role="main">

            <div class="section contact-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/programs-header.jpg');">
                <div class="row">
                    <div class="small-12 columns">
                        <div class="contact-header-text">
                            <h2>Contact</h2>
                            <p>Have a question? I'm always here to help you get started on your path to fitness.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section contact-section-1">
                <div class="row">
                    
                   <?php
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content', 'page' );

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                        ?>
                </div>
            </div>
            
            <div class="address">
                <h3>Located Inside Ultimate Fitness</h3>
                1685 S. Ash Ave., Suite H1<br/>
                Temple, AZ 85283
            </div>
            <div id="map" style="width: 100%; height: 400px;"></div>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();