<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

        <div class="entry-content">

            <?php the_content(); ?>

        </div><!-- .entry-content -->

</article><!-- #post-## -->

<ul id="filters" class="clearfix">
    <li><span class="filter active" data-filter=".app, .card, .icon, .logo, .web">All</span></li>
    <li><span class="filter" data-filter=".app">App</span></li>
    <li><span class="filter" data-filter=".card">Card</span></li>
    <li><span class="filter" data-filter=".icon">Icon</span></li>
    <li><span class="filter" data-filter=".logo">Logo</span></li>
    <li><span class="filter" data-filter=".web">Web</span></li>
</ul>


<div id="portfoliolist">
  <div class="portfolio logo" data-cat="logo">
    <div class="portfolio-wrapper">
      <img src="http://lorempixel.com/150/150/" alt="" />
    </div>
  </div>
</div>

<?php
/*

$images = get_field('gallery', 'option');

if( $images ): ?>
    <div class = "row gallery_images">
        <?php foreach( $images as $image ): ?>
            <div class = "col-sm-2 gallery_thumb" data-aos="fade-up" data-cat="image_tag">
                <a class = "gallery" href="<?php echo $image['url']; ?>" data-featherlight="image">
                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
*/