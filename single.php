<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header(); ?>

<div class="wrapper" id="full-width-page-wrapper">

<div class="container" id="content" tabindex="-1">

<div class = "row">

	<div class = "col-md-8">
	<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'single' ); ?>

						<?php understrap_post_nav(); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

		</div><!-- #primary -->

		<div class = "col-md-4">
			<?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
				<aside id="blog-sidebar">
					<?php dynamic_sidebar( 'blog-sidebar' ); ?>
				</aside>
			<?php endif; ?>
		</div>

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
