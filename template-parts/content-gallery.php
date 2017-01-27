<header class="entry-header">

        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

    </header><!-- .entry-header -->
        
        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

                <div class="entry-content">

                    <?php the_content(); ?>

                </div><!-- .entry-content -->

        </article><!-- #post-## -->

<?php 

$images = get_field('gallery', 'option');

if( $images ): ?>
    <div class = "row">
        <?php foreach( $images as $image ): ?>
            <div class = "col-sm-2 gallery_thumb" data-aos="fade-up">
                <a class = "gallery" href="<?php echo $image['url']; ?>" data-featherlight="image">
                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>