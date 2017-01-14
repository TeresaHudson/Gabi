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


			<div class="main-img-wrap" style="background: blue">
				<div class="row">
					<div class="small-12 medium-expand columns">
						Nothing Goes in Here. 
					</div>
					<div class="small-12 medium-expand columns">
						<h2>Title</h2>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ornare hendrerit ipsum, finibus aliquam tortor faucibus et. Etiam vitae iaculis quam. Nulla ut ullamcorper lorem, facilisis tempus metus. Cras maximus leo quis lacinia molestie. Praesent malesuada ligula vitae elit sodales fermentum.
						<a>Call to action</a>
					</div>
				</div>
			</div>

			<div class="testimonials-wrap" style="background: green">
				<div class="row">
					<div class="small-12 medium-expand columns">
						<h2>Testimonial</h2>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ornare hendrerit ipsum, finibus aliquam tortor faucibus et. Etiam vitae iaculis quam. Nulla ut ullamcorper lorem, facilisis tempus metus. Cras maximus leo quis lacinia molestie. Praesent malesuada ligula vitae elit sodales fermentum.
					</div>
					<div class="small-12 medium-expand columns">
						Picture of testimonial person
					</div>
				</div>
			</div>

			<div class="programs-wrap" style="background: gray">
				<div class="row">
					<h2 class="small-12 columns">Programs</h2>
					<div class="small-12 medium-expand columns">
						Program Information Goes here.
					</div>
					<div class="small-12 medium-expand columns">
						Program Information Goes here.
					</div>
					<div class="small-12 medium-expand columns">
						Program Information Goes here.
					</div>
					<div class="small-12 medium-expand columns">
						Program Information Goes here.
					</div>
				</div>
			</div>

			<div class="articles-wrap" style="background: purple">
				<div class="row">
					<h2 class="small-12 columns">Articles</h2>
					<div class="small-12 medium-expand columns">
						Program Information Goes here.
					</div>
					<div class="small-12 medium-expand columns">
						Program Information Goes here.
					</div>
					<div class="small-12 medium-expand columns">
						Program Information Goes here.
					</div>
				</div>
			</div>
			











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
