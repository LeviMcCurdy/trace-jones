<?php get_header(); ?>
<div class="sub-page">

<ul class="rslides">
<li><img src="http://f47.b2a.myftpupload.com/wp-content/uploads/2015/03/auctions.jpg" class="attachment-post-thumbnail wp-post-image" alt="auctions"></li>
</ul>

<div class="wrap group first-block">

<div class="grid-4">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<h1><?php the_title(); ?></h1> 
<?php endwhile; wp_reset_query(); ?>

<?php
echo '<div class="group">';

echo '<p class="auction-date">';
the_field('auction_date');

$sold = get_post_meta($post->ID, 'sold_price', true);
if ( $sold ) {
echo '<span>Sold Price: $';
the_field('sold_price');
echo '</span>';
} else {}


echo '</p>';

echo '<p class="auction-address">';
the_field('auction_address');
echo '</p>';


echo '<p class="auction-description">';
the_field('auction_description');
echo '</p>';

?>
<?php $gallery_auction = get_post_meta($post->ID, 'auction_gallery', true);
if ( $gallery_auction ) { ?>
<div class="gallery-auction group">

<?php 

$images = get_field('auction_gallery');

if( $images ): ?>
    
        <?php foreach( $images as $image ): ?>
            <div class="grid-1">
                <a href="<?php echo $image['url']; ?>" rel="lightbox">
                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
                </div>
          
        <?php endforeach; ?>
    
<?php endif; ?>

</div>

<?php } else {} ?>

<?php

$brochure = get_post_meta($post->ID, 'brochure_button', true);
if ( $brochure ) {
echo '<a class="auction-button" href="';
the_field('brochure_button');
echo '" target="_blank">View Brochure</a>';
} else {}

$map = get_post_meta($post->ID, 'auction_map', true);
if ( $map ) {
echo '<a class="auction-button" href="';
the_field('auction_map');
echo '" target="_blank">Map</a>';
} else {}

$video = get_post_meta($post->ID, 'video_auction', true);
if ( $video ) {
echo '<a class="auction-button" href="';
the_field('video_auction');
echo '" target="_blank">Video</a>';
} else {}


echo '</div>';

?>

</div>




<div class="grid-2">

<a href="" class="upcoming-auctions-button"> Upcoming Auctions</a>

<a href="" class="auction-archive-button"> Auction Archive</a>

</div>




</div>
<?php get_footer(); ?>