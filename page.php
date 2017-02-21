<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if( is_page( 'homepage' ) ) {
    	echo '<div class="hp_wrapper" id="full-width-page-wrapper">';
    }

    else {
		echo '<div class="wrapper" id="full-width-page-wrapper">';
		}

	if( !is_page( 'homepage' ) ) {
		echo '<header class="entry-header">' . the_title( '<h1 class="entry-title">', '</h1>' ) . '</header><!-- .entry-header -->';
	}
?>

	<div class="<?php echo esc_html( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main">

					<?php while ( have_posts() ) : the_post(); ?>

					<?php

					if( is_page( 'homepage' ) ) {
      					get_template_part( 'template-parts/content', 'home' );
    				}

					elseif( is_page( 'get-directions' ) ) {
					    get_template_part( 'template-parts/content', 'directions' );
					}

					elseif( is_page( 'testimonials' ) ) {
					    get_template_part( 'template-parts/content', 'testimonials' );
					}

					elseif( is_page( 'gallery-of-work' ) ) {
					    get_template_part( 'template-parts/content', 'gallery' );
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

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
