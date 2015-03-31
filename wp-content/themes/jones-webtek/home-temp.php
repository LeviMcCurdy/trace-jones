<?php
/**
 *
 * Template Name: Home Page
 * Author: WebTek
 * 
 *
**/

?>
<?php get_header(); ?>
<?php if( have_rows('slider') ): ?>

	<ul class="rslides">

	<?php while( have_rows('slider') ): the_row(); 

		// vars
		$image = get_sub_field('image_slide');


		?>

		<li>
		<img src="<?php echo $image; ?>" alt="<?php echo $image['alt'] ?>" />
		</li>

	<?php endwhile; ?>

	</ul>

<?php endif; ?>


<div class="wrap group first-block">

<div class="grid-4 introduction">
<h1><?php the_field('h1_home'); ?></h1>
<h2><?php the_field('h2_home'); ?></h2>
<?php the_field('intro_text'); ?>

<a href="<?php the_field('upcoming_auctions'); ?>" class="upcoming-auctions-button"> Upcoming Auctions</a>

<a href="<?php the_field('auction_archive'); ?>" class="auction-archive-button"> Auction Archive</a>

</div>

<div class="grid-2">

<h3>Our Auction Services Include:</h3>
<?php if( have_rows('auction_services') ): ?>

	<ul class="services-list">

	<?php while( have_rows('auction_services') ): the_row(); 

		// vars
		$list = get_sub_field('list_item');


		?>

		<li><?php echo $list; ?></li>

	<?php endwhile; ?>

	</ul>

<?php endif; ?>


</div>


</div>



<div class="wrap group second-block">

<div class="contain">

<div class="grid-half equal-block house">

</div>

<div class="grid-half equal-block selling-cta">

<div class="the-inside-div">
<h4><?php the_field('selling_property_cta_title');?></h4>
<?php the_field('selling_property_cta_text');?>
</div>


</div>

</div>

</div>






<div class="wrap group third-block">

<div class="contain">

<div class="grid-2 equal-block">

<p class="email-sign-up"><i class="fa fa-envelope"></i> FREE Email Alert Signup</p>
<div class="sign-up-form">

<p>Enter your email address to receive our Free Auction Alerts sent right to your email inbox!</p>

<form class="email-only">

<input type="email" name="email" placeholder="email@address.com" required/>
<input type="submit" name="submit" value="Sign Up" />
</form>

</div>




</div>

<div class="grid-4 equal-block registered">

<div class="paaa">
<?php the_field('pa_aa_text');?>
<img src="http://f47.b2a.myftpupload.com/wp-content/uploads/2015/03/PAA-LOGO-GRAY.png" class="logo-paas" />
</div>

</div>

</div>

</div>










<?php get_footer(); ?>