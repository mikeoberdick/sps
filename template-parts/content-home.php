<div id = "hpSliders" class="owl-carousel owl-theme">
    <?php
    if (have_rows('slider_info', 'option') ):
        while (have_rows('slider_info', 'option')) : the_row();
            ?>
            <div class = "hp_slider" class = "item">
                <h3><?php the_sub_field('slide_title'); ?></h3>
                <p><?php the_sub_field('slide_text'); ?></p>
                <a href = "<?php the_sub_field('slide_link'); ?>" role = "button">Learn More</a>
                <img src = "<?php the_sub_field('slide_image'); ?>">
            </div>
            <?php
        endwhile;
        else :
    endif;
    ?>
</div>

<div class = "row">
    <div class = "col-md-9">
        <h3><?php the_field('call_to_action_heading', 'option'); ?></h3>
        <p><?php the_field('call_to_action_text', 'option'); ?></p>
    </div>
    <div class = "col-md-3">
        <a href = "<?php the_field('call_to_action_link', 'option'); ?>" role = "button">Learn More</a>
    </div>
</div>

		
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="entry-content">

		<?php the_content(); ?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->

<h1>Testimonials</h1>

<hr>
                
<div id = "testimonialCarousel" class="owl-carousel owl-theme">
    <?php
        if (have_rows('testimonial_info', 'option')):
            while (have_rows('testimonial_info', 'option')) : the_row();
                ?>
                <div class="hp_testimonial item">
                    <?php   $author = get_sub_field('testimonial_author');
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

<h1>Our Products</h1>

<hr>

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