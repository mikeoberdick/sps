<div class = "slider_wrapper">
<div id = "hpSliders" class=" owl-carousel owl-theme">
    <?php
    if (have_rows('slider_info', 'option') ):
        while (have_rows('slider_info', 'option')) : the_row();
            ?>
            <div class = " row hp_slider no-gutters" class = "item">
                <div class = "col-md-12 col-lg-4 slide_content">
                    <h3><?php the_sub_field('slide_title'); ?></h3>
                    <p><?php the_sub_field('slide_text'); ?></p>
                    <a href = "<?php the_sub_field('slide_link'); ?>" role = "button">Learn More</a>
                </div>
                <div class = "col-lg-8 hidden-md-down slide_image">
                <img src = "<?php the_sub_field('slide_image'); ?>">
                </div>
            </div>

            <?php
        endwhile;
        else :
    endif;
    ?>
</div>
</div><!-- .slider_wrapper -->

<div class = "row">
<?php if (have_rows('hp_sections', 'option') ):
        while (have_rows('hp_sections', 'option')) : the_row();
            ?>
                <div class = "col-md-4 sectionWrap">
                    <div class = "hp_section">
                        <h3><?php the_sub_field('title'); ?></h3>
                        <div class = "imgContainer">
                            <img src = "<?php the_sub_field('image'); ?>">
                        </div>
                        <p><?php the_sub_field('content'); ?></p>
                        <a href = "<?php the_sub_field('link'); ?>" role = "button">Learn More</a>
                    </div>
                </div>
            <?php
        endwhile;
        else :
    endif;
    ?>
</div>

<div class = "container">
    <div class = "row cta">
        <div class = "col-md-9 cta_info">
            <h3><?php the_field('call_to_action_heading', 'option'); ?></h3>
            <p><?php the_field('call_to_action_text', 'option'); ?></p>
        </div>
        <div class = "col-md-3 cta_link">
            <a href = "<?php the_field('call_to_action_link', 'option'); ?>" role = "button">Learn More</a>
        </div>
    </div>
</div>

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

<h1>Our Partners</h1>

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