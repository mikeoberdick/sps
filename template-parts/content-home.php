<div>
	<img id = "hp_hero" src = "<?php the_field('hero_image'); ?>" alt = "Solar Pool Service" title = "Solar Pool Service"/>
</div>
	
	<?php while ( have_posts() ) : the_post(); ?>
		
		<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

				<div class="entry-content">

					<?php the_content(); ?>

				</div><!-- .entry-content -->

		</article><!-- #post-## -->

	<?php endwhile; // end of the loop ?>

	

<?php if( have_rows('homepage_testimonials') ): ?>
	<div class="owl-carousel owl-theme">
		<ul class="testimonials">

		<?php while( have_rows('homepage_testimonials') ): the_row(); 

		// vars
		$author = get_sub_field('testimonial_author');
		$testimonial = get_sub_field('testimonial_text');
		$location = get_sub_field('testimonial_location');

		?>

		<li class="testimonial">
			<?php if( $testimonial ): ?>
				<div><?php echo $testimonial; ?></div>
			<?php endif; ?>

			<?php if( $author ): ?>
				<div><?php echo $author; ?> | <?php echo $location; ?></div>
			<?php endif; ?>
		</li>

	<?php endwhile; ?>

	</ul>

<?php endif; ?>