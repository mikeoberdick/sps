<?php
/**
 * The template is for displaying the blog page titled "Blog" with the slug 'blog'.
 *
 * @package understrap
 */

get_header(); ?>

<div class="wrapper" id="full-width-page-wrapper">

<header class="entry-header"><h1 class = "entry-title"><?php echo apply_filters( 'the_title', get_the_title( get_option( 'page_for_posts' ) ) ); ?></h1></header><!-- .entry-header -->

<div class="container" id="content" tabindex="-1">

<div class = "row">

	<div class = "col-md-8">
	<main class="site-main" id="main">
<?php while ( have_posts() ) : the_post(); ?>

	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

	<?php the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

	<div class="entry-meta">

	<span class="posted-on">Posted On <?php the_date(); ?></span>
	<span class="byline"><span class="author vcard"> by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></span></span>

	</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

	<?php the_excerpt(); ?>

	</div><!-- .entry-content -->


	<footer class="entry-footer">

	<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->
	</article><!-- #post-## -->
	<hr>
	

	
	<?php endwhile; // end of the loop ?>
	<div id = "blogPagination">
	<?php understrap_pagination(); ?>
	</div>
	</main>
</div>





<div class = "col-md-4">
	<?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
		<aside id="blog-sidebar">
			<?php dynamic_sidebar( 'blog-sidebar' ); ?>
		</aside>
	<?php endif; ?>
</div>

</div> <!-- .row -->
</div><!-- .container -->
</div><!-- .wrapper -->

<?php get_footer(); ?>