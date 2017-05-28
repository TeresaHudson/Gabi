<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gabrielle
 */

?>

	</div><!-- #content -->

	<section id="fatfooter">
		<div class="row">
			<div class="small-12 medium-expand columns">
				
				<?php if ( is_active_sidebar( 'fatfooter-1' ) ) : ?>
				    <div id="secondary" class="widget-area dark-background" role="complementary">
				    <?php dynamic_sidebar( 'fatfooter-1' ); ?>
				    </div>
				<?php endif; ?>

			</div>
			<div class="small-12 medium-expand columns">
				<?php if ( is_active_sidebar( 'fatfooter-2' ) ) : ?>
				    <div id="secondary" class="widget-area dark-background" role="complementary">
				    <?php dynamic_sidebar( 'fatfooter-2' ); ?>
				    </div>
				<?php endif; ?>
			</div>
			<div class="small-12 medium-expand columns">
				<?php if ( is_active_sidebar( 'fatfooter-3' ) ) : ?>
				    <div id="secondary" class="widget-area dark-background" role="complementary">
				    <?php dynamic_sidebar( 'fatfooter-3' ); ?>
				    </div>
				<?php endif; ?>
			</div>
			<div class="small-12 medium-expand columns">
				<?php if ( is_active_sidebar( 'fatfooter-4' ) ) : ?>
				    <div id="secondary" class="widget-area dark-background" role="complementary">
				    <?php dynamic_sidebar( 'fatfooter-4' ); ?>
				    </div>
				<?php endif; ?>
			</div>
		</div>

	</section>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row">
			<div class="small-12 medium-expand columns">
				Copyright &copy; <?php echo date("Y"); ?> Healthy Body Works. All rights reserved.
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
