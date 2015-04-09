<?php get_header(); ?>
<div class="sub-page">

<ul class="rslides">
<li><img src="http://f47.b2a.myftpupload.com/wp-content/uploads/2015/03/auctions.jpg" class="attachment-post-thumbnail wp-post-image" alt="auctions"></li>
</ul>

<div class="wrap group first-block">

<div class="grid-4">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<h1><?php the_title(); ?></h1> 
  <?php the_content(); ?>
<?php endwhile; wp_reset_query(); ?>

</div>




<div class="grid-2">

<a href="" class="upcoming-auctions-button"> Upcoming Auctions</a>

<a href="" class="auction-archive-button"> Auction Archive</a>

</div>




</div>
<?php get_footer(); ?>