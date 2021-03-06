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
								<p class = "text-center tagline"><?php the_field('company_tagline', 'option'); ?></p>
								<div class = "text-center">
									<a href = "<?php the_field('facebook', 'option'); ?>"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
									<a href = "<?php the_field('twitter', 'option'); ?>"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
									<a href = "<?php the_field('google_plus', 'option'); ?>"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
								</div>
								<div class = "text-center">		
								<p><?php the_field('company_address', 'option'); ?></p>
								<p><a href = "tel:<?php the_field('company_phone', 'option'); ?>"><?php the_field('company_phone', 'option'); ?></a></p>
								<p><?php the_field('footer_towns', 'option'); ?></p>
								<p>&copy; <?php echo date('Y');  ?> <?php $blog_title = get_bloginfo( 'name' ); echo $blog_title; ?> <span class="sep"> | </span> Website by <a href = "http://www.designs4theweb.com">Designs 4 The Web</a></p>
								</div>
							</div>
						</div>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
