<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

        <div class="entry-content">

            <?php the_content(); ?>

        </div><!-- .entry-content -->

</article><!-- #post-## -->

<?php 

    $terms = get_terms([
    'taxonomy' => 'image_tag',
    'hide_empty' => false,
]); ?>

<ul id="filters" class="clearfix">
<li><span class="filter" data-filter=".all">All Images</span></li>
<?php foreach ( $terms as $term) {

?>

<li><span class="filter" data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></span></li>
<?php 
    }
?>
</ul>

<?php

$images = get_field('gallery', 'option');

if( $images ): ?>

<div id="portfoliolist" class = "row">

<?php foreach( $images as $image ): ?>

<?php $terms = wp_get_post_terms($image['ID'], 'image_tag'); ?>


<div class="col-xs-12 col-sm-6 col-lg-3 portfolio all <?php foreach( $terms as $term ): ?><?php echo $term->slug; ?> <?php endforeach; ?>" data-cat="all <?php foreach( $terms as $term ): ?><?php echo $term->slug; ?> <?php endforeach; ?>" style = "flex-basis: 100%;">
    <div class="portfolio-wrapper">
      <a href="<?php echo $image['url']; ?>" data-featherlight="image"><img src="<?php echo $image['sizes']['gallery-thumb']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
    </div>
  </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<!-- <?php echo get_post_meta( $image['id'], 'image_tag', true ); ?> -->