<?php
/**
 *
 * Template Name: Auctions (upcoming)
 * Author: WebTek
 * 
 *
**/

?>
<?php get_header(); ?>
<div class="sub-page">

<ul class="rslides">
		<li>
		<?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	the_post_thumbnail();
} 
?></li>
</ul>

<div class="wrap group first-block">

<div class="grid-3">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<h1><?php the_title(); ?></h1> 
  <?php the_content(); ?>
<?php endwhile; wp_reset_query(); ?>

</div>

<div class="grid-3">

<a href="" class="upcoming-auctions-button"> Upcoming Auctions</a>

<a href="" class="auction-archive-button"> Auction Archive</a>


</div>


</div>

<div class="wrap group">


<?php
$args = array( 
    'post_type' => 'auction', 
    'posts_per_page' => 12, 
    'orderby' => 'post_date',
    'order' => 'DESC');

$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
echo '<div class="group">';
echo '<div class="auction-image grid-2">';

echo '<img src="';
the_field('image_auction');
echo '" alt="Tracey Jones Auction Listing" />';

echo '</div>';


echo '<div class="auction-content grid-4">';
echo '<p class="auction-date">';
the_field('auction_date');
echo '</p>';

echo '<p class="auction-address">';
the_field('auction_address');
echo '</p>';


echo '<p class="auction-description">';
the_field('auction_description');
echo '</p>';

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

echo '</div>';

endwhile;
?>


</div>











</div>
<?php get_footer(); ?>