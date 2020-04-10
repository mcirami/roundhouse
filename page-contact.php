<?php 
/*
 * Template Name: Contact Us
 */	
 
get_header(); ?>

<section class="contact_us">
	<div class="page_header">
		<div class="container">
			<h1><?php the_title(); ?></h1>
			<div class="contact_info">
				2600 Camino Ramon · San Ramon, CA
				<br />info@roundhouse.com
				<br />505 808 1234
			</div>
		</div>
	</div>
	<div class="contact_image">
		<img src="<?php echo bloginfo('template_url'); ?>/images/contact_map.jpg" />
	</div>
	<div class="directions">
		<div class="container">
			<div class="tab">
				<h2>Directions to Roundhouse</h2>
			</div>
			<div class="content">
				<div class="one_column">
					<p>The entrance to Roundhouse is off of Camino Ramon between Bishop Drive and Executive parkway. The driveway runs 0.8 miles along our front lake to the parking area located on the right of the central fountain / roundabout.</p>
				</div>
				<div class="two_column">
					<div class="left">
						<h3>From SFO</h3>
						<p>A full-service butcher shop presenting organic, grass-fed meats that have been raised on a 10,000 acre ranch near Mount Shasta and custom-butchered in house. Also serving prepared food, including grilled meats, roasts, and stews.</p>
					</div>
					<div class="right">
						<h3>From SFO</h3>
						<p>A full-service butcher shop presenting organic, grass-fed meats that have been raised on a 10,000 acre ranch near Mount Shasta and custom-butchered in house. Also serving prepared food, including grilled meats, roasts, and stews.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="map">
		<div class="container">
			<div class="tab white">
				<h2>Roundhouse Dining and Conference Overview Map</h2>
			</div>
		</div>
		<div class="two_column">
			<div class="container">
				<div class="left">
					<img src="<?php echo bloginfo('template_url'); ?>/images/overview_map.png" />
				</div>
				<div class="right">
					<div class="column_left">
						<h3>Food Vendors</h3>
						<ul>
							<li><span><img src="<?php echo bloginfo('template_url'); ?>/images/red_circle_1.png" /></span>Mexican</li>
							<li><span><img src="<?php echo bloginfo('template_url'); ?>/images/red_circle_2.png" /></span>Pizza</li>
							<li><span><img src="<?php echo bloginfo('template_url'); ?>/images/red_circle_3.png" /></span>Greens</li>
							<li><span><img src="<?php echo bloginfo('template_url'); ?>/images/red_circle_4.png" /></span>General Seating</li>
							<li><span><img src="<?php echo bloginfo('template_url'); ?>/images/red_circle_5.png" /></span>New American</li>
							<li><span><img src="<?php echo bloginfo('template_url'); ?>/images/red_circle_6.png" /></span>Coffee Shop</li>
						</ul>
					</div>
					<div class="column_right">
						<h3>Conference Rooms</h3>
						<ul>
							<li><span><img src="<?php echo bloginfo('template_url'); ?>/images/black_circle_7.png" /></span>Existing Auditorium</li>
							<li><span><img src="<?php echo bloginfo('template_url'); ?>/images/black_circle_8.png" /></span>MultiPurpose Room</li>
							<li><span><img src="<?php echo bloginfo('template_url'); ?>/images/black_circle_9.png" /></span>Lecture Hall</li>
							<li><span><img src="<?php echo bloginfo('template_url'); ?>/images/gray_circle_r.png" /></span>Restrooms</li>
							<li><span><img src="<?php echo bloginfo('template_url'); ?>/images/green_circle_$.png" /></span>Retail</li>
							<li><span><img src="<?php echo bloginfo('template_url'); ?>/images/gray_circle_l.png" /></span>Lounge Area</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>