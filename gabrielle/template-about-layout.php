<?php /* Template Name: About Page Layout */ 
 
get_header(); ?>

    <div id="primary" class="content-area about-page">
        <main id="main" class="site-main" role="main">

            <div class="section about-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/about-me-header.jpg');">
                <div class="row">
                    <div class="small-12 columns">
                        <div class="about-header-text">Hello, I'm Gabi.</div>
                    </div>
                </div>
            </div>

            <div class="section about-section-1">
                <div class="row">
                    <div class="small-12 columns">
                        <h2>I <strong>Am Not</strong> Your Average Personal <strong>Trainer</strong></h2>
                    </div>
                    <div class="small-12 medium-6 columns">
                        <p><?php the_field('top_section_column_1'); ?></p>
                    </div>
                    <div class="small-12 medium-6 columns">
                        <p><?php the_field('top_section_column_2'); ?></p>
                    </div>
                </div>
            </div>

            <div class="section about-section-2" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/about-me-section-2-bg.jpg');">
                <div class="row">
                    <div class="small-12 columns">
                        <h2>Why am I Qualified to be Your Coach?</h2>
                    </div>
                    <div class="small-12 columns">
                        <p><?php the_field('middle_section'); ?></p>
                    </div>
                </div>
            </div>

            <div class="section about-section-3">
                <div class="row">
                    <div class="small-12 medium-6 columns">
                        <p><?php the_field('bottom_section_column_1'); ?></p>
                    </div>
                    <div class="small-12 medium-6 columns">
                        <p><?php the_field('bottom_section_column_2'); ?></p>
                    </div>
                </div>
            </div>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();