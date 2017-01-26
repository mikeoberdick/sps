<header class="entry-header">

        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

    </header><!-- .entry-header -->
        
        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

                <div class="entry-content">

                    <?php the_content(); ?>

                </div><!-- .entry-content -->

        </article><!-- #post-## -->

<div class = "page_testimonials">
    <?php
        if (have_rows('testimonial_info', 'option')):
            while (have_rows('testimonial_info', 'option')) : the_row();
                ?>
                <div class="col-sm-6 testimonial_outer_wrapper">
                    <div class = "testimonial_wrapper">
                        <?php   $author = get_sub_field('testimonial_author');
                                $testimonial = get_sub_field('testimonial_text');
                                $location = get_sub_field('testimonial_location');
                        ?>
                        <div class = "testimonialText"><?php echo $testimonial; ?></div>
                        <div class = "testimonialAuthor"><?php echo $author; ?> | <?php echo $location; ?></div>
                    </div>
                </div>
                <?php
            endwhile;
        else :
        endif;
    ?>
</div>