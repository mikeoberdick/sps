<?php
/**
 * Template Name: Contact Page Template
 *
 * Template for displaying one of the contact pages with a right sidebar.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' ); ?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<div class = "col-md-8">

				<main class="site-main" id="main">

					<?php while ( have_posts() ) : the_post(); ?>

					<?php

					if( is_page( 'get-directions' ) ) {
					    get_template_part( 'template-parts/content', 'directions' );
					}

					elseif( is_page( 'get-directions' ) ) {
					    get_template_part( 'template-parts/content', 'directions' );
					}

					else {
					   get_template_part( 'loop-templates/content', 'page' );
					}

					?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :

							comments_template();

						endif;
						?>

						<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->
			</div>

			<div class = "col-md-4">

				<?php if ( is_active_sidebar( 'contact-sidebar' ) ) : ?>
					<aside id="sidebar">
					<?php dynamic_sidebar( 'contact-sidebar' ); ?>
					</aside>
				<?php endif; ?>
			</div>

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>

