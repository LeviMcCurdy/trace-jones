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

<div class="grid-4">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<h1><?php the_title(); ?></h1> 
  <?php the_content(); ?>
<?php endwhile; wp_reset_query(); ?>

</div>

<?php if (is_page (18)) { ?>
<div class="grid-2 left">

<img src="http://f47.b2a.myftpupload.com/wp-content/uploads/2015/04/head-shot.png" alt="Tracey Jones Auction">

<p><strong>Tracey L. Jones Auctioneers, Inc.</strong><br>
P.O.Box 545, Morgantown, PA 19543</p>
<p><strong>Phone:</strong> (610) 286-7834 <br>
<strong>Mobile:</strong> (484) 332-5287</p>
<p><strong>Email:</strong> tracey@tljonesauctioneers.com</p>


<div class="videoWrapper">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48779.06643264452!2d-75.89577754999996!3d40.17141854999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c66600a28faf15%3A0x7aa27516c079743c!2sMorgantown%2C+PA+19543!5e0!3m2!1sen!2sus!4v1427475353627" width="600" height="450" frameborder="0" style="border:0"></iframe>
	</div>
	</div>
<?php } else { ?>




<div class="grid-2">

<a href="" class="upcoming-auctions-button"> Upcoming Auctions</a>

<a href="" class="auction-archive-button"> Auction Archive</a>

</div>


<?php } ?>

</div>


<?php get_footer(); ?>