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


			<div class="section main-img-wrap">
				<div class="row">
					<div class="small-12 medium-expand columns">

					</div>
					<div class="small-12 medium-expand columns">
						<h2>A <strong>Holistic</strong> Approach to Personal <strong>Training</strong></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ornare hendrerit ipsum, finibus aliquam tortor faucibus et. Etiam vitae iaculis quam. Nulla ut ullamcorper lorem, facilisis tempus metus. Cras maximus leo quis lacinia molestie. Praesent malesuada ligula vitae elit sodales fermentum.</p>
						<a><div class="button">Call to action</div></a>
					</div>
				</div>
			</div>

			<div class="section testimonials-wrap">
				<div class="slider">
					<div id="flex-testimonials">
					  	<ul class="slides">

					  		<li>
					  			<div class="row">						
									<div class="small-12 medium-8 columns">
										<h2>Testimonial 1</h2>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ornare hendrerit ipsum, finibus aliquam tortor faucibus et. Etiam vitae iaculis quam. Nulla ut ullamcorper lorem, facilisis tempus metus. Cras maximus leo quis lacinia molestie. Praesent malesuada ligula vitae elit sodales fermentum.
									</div>
									<div class="small-12 medium-4 columns">
										Picture of testimonial person
									</div>
								</div>
							</li>

							<li>
					  			<div class="row">						
									<div class="small-12 medium-8 columns">
										<h2>Testimonial 2</h2>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ornare hendrerit ipsum, finibus aliquam tortor faucibus et. Etiam vitae iaculis quam. Nulla ut ullamcorper lorem, facilisis tempus metus. Cras maximus leo quis lacinia molestie. Praesent malesuada ligula vitae elit sodales fermentum.
									</div>
									<div class="small-12 medium-4 columns">
										Picture of testimonial person
									</div>
								</div>
							</li>

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

					<div class="small-12 medium-expand columns">
						<div class="program-wrap">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/icon-stretch.png" alt="Program Name" title="Program Name">
							<h3>Program Name</h3>
							<a href="#" class="button center white">Learn More >></a>
						</div>
					</div>
					
					<div class="small-12 medium-expand columns">
						<div class="program-wrap">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/icon-stretch.png" alt="Program Name" title="Program Name">
							<h3>Program Name</h3>
							<a href="#" class="button center white">Learn More >></a>
						</div>
					</div>

					<div class="small-12 medium-expand columns">
						<div class="program-wrap">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/icon-stretch.png" alt="Program Name" title="Program Name">
							<h3>Program Name</h3>
							<a href="#" class="button center white">Learn More >></a>
						</div>
					</div>

					<div class="small-12 medium-expand columns">
						<div class="program-wrap">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/icon-stretch.png" alt="Program Name" title="Program Name">
							<h3>Program Name</h3>
							<a href="#" class="button center white">Learn More >></a>
						</div>
					</div>
				</div>
			</div>

			<div class="section articles-wrap">
				<div class="row">
					<h2 class="small-12 columns">Articles</h2>
					


					<div id="flex-posts" class="small-12 columns">
					  	<ul class="slides">


							<?php // Display blog posts on any page @ https://m0n.co/l
							$temp = $wp_query; $wp_query= null;
							$wp_query = new WP_Query(); $wp_query->query('posts_per_page=9' . '&paged='.$paged);
							while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
							
							<li>
								<div class="small-12 medium-expand columns">
									<?php the_post_thumbnail(); ?>
									<h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
									<?php the_excerpt(); ?>
								</div>
							</li>

							<?php endwhile; ?>

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
