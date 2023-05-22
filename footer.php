<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jandali
 */

?>

	<footer id="colophon" class="site-footer bg-primary">
		<div class="border-bottom">
			<div class="container">
				<div class="row pt-5 pb-3 py-lg-5 text-white">
					<div class="col-12 col-lg-3">
						<?php get_template_part( 'template-parts/footer/contact' );?>
					</div>
					<?php get_template_part( 'template-parts/footer/menus' );?>
				</div>
			</div>
		</div>
		<div class="border-bottom">
			<div class="container">
				<div class="row py-4 py-lg-5 text-white">
					<?php get_template_part( 'template-parts/footer/socials' );?>
					<?php get_template_part( 'template-parts/footer/mitgliedschaften' );?>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="site-info text-white pt-4 pb-3">
				<?php if(have_rows('rechtliches', 'options')):?>
					<ul class="d-flex justify-content-center">
						<?php while(have_rows('rechtliches', 'options')): the_row();
							$text = get_sub_field('text');
							$url = get_sub_field('url');?>
							<li class="no-before"><a href="<?= $url; ?>" class="text-white"><?= $text; ?></a></li>
						<?php endwhile;?>
					</ul>
				<?php endif;?>
				<p class="text-center mb-0">
					© <?php echo date("Y"); ?> <?php if ( $copyright = get_field( 'copyright', 'options' ) ):?><?= $copyright;?><?php endif;?>
				</p>
			</div><!-- .site-info -->
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/image_slider.js"></script>	
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/to_the_top_button.js"></script>	
</body>
</html>
