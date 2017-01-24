<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_html( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">
						
						<div class = "row">
							<div class = "col-sm-12">
								<img id = "footerLogo" class = "img-responsive d-block mx-auto" src = "<?php the_field('footer_logo', 'option'); ?>">
							</div>
						</div>
						
						<div class = "row">
							<div class = "col-sm-12">
								<p class = "text-center"><?php the_field('company_tagline', 'option'); ?></p>
								<p class = "text-center"><?php the_field('company_address', 'option'); ?></p>
								<p class = "text-center">&copy; <?php echo date('Y'); ?> <span class="sep"> | </span> Website by <a href = "http://www.designs4theweb.com">Designs 4 The Web</a></p>
							</div>
						</div>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page -->

<?php if( is_page ( 'homepage') ) {
	echo '
	<script>
		jQuery(document).ready(function(){

		jQuery("#hpSliders").owlCarousel({
	  		autoplay: true,
	  		autoplayTimeout:3000,
    		autoplayHoverPause:true,
	  		items: 1,
	  		center: true,
	  		loop: true,
	  		autoHeight: true

  		});

  		jQuery("#logoCarousel").owlCarousel({
  			autoplay: true,
  			autoplayTimeout:1000,
    		autoplayHoverPause:true,
  			margin: 10,
	  		items: 4,
	  		loop: true,
	  		dots: false

  		});

		jQuery("#testimonialCarousel").owlCarousel({
	  		autoplay: false,
	  		items: 1,
	  		center: true,
	  		loop: true,
	  		autoHeight: true
  		});

	});
	</script>
	'; } ?>

<?php wp_footer(); ?>

</body>

</html>
