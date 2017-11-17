<?php
/**
 * The template for displaying the home page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Gabrielle
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">



			<div id="flex-main-header">
				<ul class="slides">
		
				<?php

				// check if the repeater field has rows of data
				if( have_rows('main_homepage_slides' , 'options') ):

				 	// loop through the rows of data
				    while ( have_rows('main_homepage_slides' , 'options') ) : the_row(); ?>

	       				<li>
							<div class="section main-img-wrap">
								<div class="row">
									<div class="small-12 medium-expand columns">

									</div>
									<div class="small-12 medium-expand columns">
										<h2><?php the_sub_field('slide_title'); ?></h2>
										<p><?php the_sub_field('slide_description'); ?></p>
										<a href="<?php the_sub_field('slide_call_to_action_url'); ?>"><div class="button"><?php the_sub_field('slide_call_to_action_text'); ?></div></a>
									</div>
								</div>
							</div>
						</li>

				<?php    endwhile;
				    echo 'found rows';
				else :
				    // no rows found
				    echo 'no rows found';
				endif;
				?>
				</ul>
			</div>





			<div id="flex-main-header">
				<ul class="slides">
		
				
				</ul>
			</div>




			<div class="section testimonials-wrap">
				<div class="slider">
					<div id="flex-testimonials">
					  	<ul class="slides">





					  	<?php

				// check if the repeater field has rows of data
				if( have_rows('testimonials' , 'options') ):

				 	// loop through the rows of data
				    while ( have_rows('testimonials' , 'options') ) : the_row(); ?>

	       				<li>
					  			<div class="row">						
									<div class="small-12 medium-8 columns">
										<h2><?php the_sub_field('testimonial-name'); ?></h2>
										<p><?php the_sub_field('testimonial'); ?></p>
									</div>
									<div class="small-12 medium-4 columns">
										<img src="<?php the_sub_field('testimonial_photo'); ?>" alt="" title="">
									</div>
								</div>
							</li>

				<?php    endwhile;
				    echo 'found rows';
				else :
				    // no rows found
				    echo 'no rows found';
				endif;
				?>

			

						</ul>
					</div>
				</div>
			</div>



			
					
			


			<div class="section programs-wrap">
				<div class="row">
					<h2 class="small-12 columns">Programs</h2>

					<div class="small-12 columns">
						<p class="section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ornare hendrerit ipsum, finibus aliquam tortor faucibus et. Etiam vitae iaculis quam. Nulla ut ullamcorper lorem, facilisis tempus metus. Cras maximus leo quis lacinia molestie. Praesent malesuada ligula vitae elit sodales fermentum.</p>
					</div>




<?php

				// check if the repeater field has rows of data
				if( have_rows('programs' , 'options') ): 

				 	// loop through the rows of data
				    while ( have_rows('programs' , 'options') ) : the_row(); ?>
					

					<div class="small-12 medium-expand columns">
						<div class="program-wrap">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/icon-stretch.png" alt="Program Name" title="Program Name">
							<h3><?php the_sub_field('program_name'); ?></h3>
							<a href="<?php the_sub_field('program_url'); ?>" class="button center white">Learn More >></a>
						</div>
					</div>


				<?php    endwhile;
				    echo 'found rows';
				else :
				    // no rows found
				    echo 'no rows found';
				endif;
				?>


				</div>
			</div>

			<div class="section articles-wrap">
				<!-- <div class="row"> --><div>
					<h2 class="small-12 columns">Articles</h2>
					


					<div id="flex-posts" class="small-12 columns">
					  	<ul class="slides">

							
							<?php // Display blog posts on any page @ https://m0n.co/l
							$temp = $wp_query; $wp_query= null;
							$wp_query = new WP_Query(); $wp_query->query('posts_per_page=9' . '&paged='.$paged);
							$num_slide = 1;
							while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

							<?php if ($num_slide % 3 == 1) : ?>
								<li><div class="recent-posts-wrapper">
   							<?php endif; ?>
							
								<div class="recent-post">
									<?php // the_post_thumbnail(); ?>
									<h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
									<?php the_excerpt(); ?>
								</div>

							<?php if ($num_slide % 3 == 0) : ?>
								<div style="clear:both;"></div></div></li>
   							<?php endif; ?>
							

							<?php 

							// if ( $num_slides % 3 == 0 ) {
							// 	echo '</li><div style="clear:both"></div><li>';
							// }



							$num_slide++;


							endwhile; ?>

							<?php if ( ($num_slide % 3 == 2) || ($num_slide % 3 == 0 ) ) : ?>
								<div style="clear:both;"></div></div></li>
   							<?php endif; ?>

							<?php wp_reset_postdata(); ?>

						</ul>
					</div><!-- /flexposts -->
				</div><!-- /row -->
			</div><!-- /section /articles-wrap -->
			











			<?php /*
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			*/ ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
