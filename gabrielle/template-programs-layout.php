<?php /* Template Name: Programs Page Layout */ 
 
get_header(); ?>

    <div id="primary" class="content-area programs-page">
        <main id="main" class="site-main" role="main">

            <div class="section programs-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/programs-header.jpg');">
                <div class="row">
                    <div class="small-12 columns">
                        <div class="programs-header-text">
                            <h2>Hello, I'm the Programs Page</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ipsum sapien, eleifend vel sem nec, congue vestibulum mauris Vestibulum eu condimentum leo, eu auctor.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section programs-section-1">
                <div class="row">

                    <!-- <div class="small-12 medium-4 columns">
                        <div class="program-icon">icon</div>
                        <h3>PROGRAM TITLE</h3>
                        <p><?php //the_field('top_section_column_1'); ?></p>
                    </div> -->
                    
                   <?php if( have_rows('programs') ): ?>

                        <?php $counter = 1; ?>

                        <?php while( have_rows('programs') ): the_row(); 

                            // vars
                            $icon = get_sub_field('program_icon');
                            $title = get_sub_field('program_title');
                            $desc = get_sub_field('program_description');
                            $link = get_sub_field('program_link');

                            ?>

    
                            <div class="small-12 medium-4 columns">
                                <?php if( $icon ): ?>
                                    <div class="program-icon"><img src="<?php echo $icon; ?>" title="<?php echo $title; ?>" alt="<?php echo $title; ?>"></div>
                                <?php endif; ?>

                                <?php if ( $title ): ?>
                                    <h3><?php echo $title; ?></h3>
                                <?php endif; ?>

                                <?php if( $desc ): ?>
                                    <p><?php echo $desc; ?></p>
                                <?php endif; ?>

                                <?php if ( $link ): ?>
                                    <div class="center"><a href="<?php echo $link; ?>" class="button">Learn More >></a></div>
                                <?php endif; ?>
                            </div>
                            
                            <?php 
                                
                                if( ($counter/3) == 1) {
                                    echo '</div><div class="row">';
                                }

                                $counter++; 

                                
                            ?>


                        <?php endwhile; ?>

                    <?php endif; ?>
                </div>
            </div>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();