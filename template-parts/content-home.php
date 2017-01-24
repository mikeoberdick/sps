<div>
	<img id = "hp_hero" src = "<?php the_field('hero_image'); ?>" alt = "Solar Pool Service" title = "Solar Pool Service"/>
</div>
		
		<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

				<div class="entry-content">

					<?php the_content(); ?>

				</div><!-- .entry-content -->

		</article><!-- #post-## -->

            <div id = "logoCarousel" class="owl-carousel owl-theme">
                    <?php
                    if (have_rows('logos', 'option') ):
                        while (have_rows('logos', 'option')) : the_row();
                            ?>
                                <img class = "carouselLogo item" src = "<?php the_sub_field('logo'); ?>">
                            <?php
                        endwhile;
                    else :
                    endif;
                    ?>
            </div>

        <div id = "testimonialCarousel" class="owl-carousel owl-theme">
                        <?php
                        if (have_rows('homepage_testimonials')):
                            while (have_rows('homepage_testimonials')) : the_row();
                                ?>
                                <div class="hp_testimonial item">
                                    <?php 	$author = get_sub_field('testimonial_author');
                                    		$testimonial = get_sub_field('testimonial_text');
        									$location = get_sub_field('testimonial_location');
        							?>
                                    <div class = "testimonialText"><?php echo $testimonial; ?></div>
                                    <div class = "testimonialAuthor"><?php echo $author; ?> | <?php echo $location; ?></div>
                                </div>
                                <?php
                            endwhile;
                        else :
                        endif;
                        ?>
        </div>