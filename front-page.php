<?php 

get_header(); ?>

<section class="home">
	
	<div class="home-swiper-container">
		<div class="swiper-wrapper">
			<?php if (have_rows('slides')) : ?>
				<?php while (have_rows('slides')) : the_row(); ?>
					<div class="swiper-slide">
						<?php $slide_img = get_sub_field('slide_img'); ?>
						<img src="<?php echo $slide_img['url']; ?>" alt="<?php echo $slide_img['alt']; ?>" />
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div> <!-- swiper-wrapper -->
		<div class="swiper-pagination"></div>
	</div> <!-- swiper-container -->
	
	<div class="container">
		<h1><?php the_field('page_title'); ?></h1>

		<div class="callouts_container">
			<?php if (have_rows('callouts')) : ?>
				<?php while (have_rows('callouts')) : the_row(); ?>
					<div class="callout">
						<?php $callout_img = get_sub_field('callout_img'); ?>
						<img class="callout_img" src="<?php echo $callout_img['url']; ?>" alt="" />
						<div class="callout_content">
							<h3><?php the_sub_field('callout_title'); ?></h3>
							<p><?php the_sub_field('callout_p'); ?></p>
						</div>
						<a class="red_link" href="<?php the_sub_field('callout_a'); ?>">
							<?php the_sub_field('callout_a_text'); ?> <img src="<?php echo bloginfo('template_url'); ?>/images/red_arrow.png" />
						</a>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div> <!-- callouts container -->
	</div> <!-- container -->
	
	<div class="news_container">
		<?php
			$args = array (
				'post_type' => 'post',
				'posts_per_page' => '1',
			);
		
			$recentPost = new WP_Query($args);
		
			while( $recentPost->have_posts() ) : $recentPost->the_post();
		?>
			<img class="news_img" src="<?php echo bloginfo('template_url'); ?>/images/news-img-1.jpg" />
			<div class="news_events">
				<h3>News and events</h3>
				<h4><?php echo the_title(); ?></h4>
				<p><?php echo the_excerpt(); ?></p>
				<a class="red_link" href="/news-events">
					View more <img src="<?php echo bloginfo('template_url'); ?>/images/red_arrow.png" />
				</a>
			</div>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</div>
	
	<div class="map_container">
		<h3>
			<img class="down_arrow" src="<?php echo bloginfo('template_url'); ?>/images/red_arrow.png" />
			<?php the_field('map_title'); ?>
			<img class="down_arrow" src="<?php echo bloginfo('template_url'); ?>/images/red_arrow.png" />
		</h3>
		<?php $map = get_field('map'); ?>
		<img class="map" src="<?php echo $map['url']; ?>" alt="<?php echo $map['alt']; ?>" />
	</div>
	
</section>

<?php get_footer(); ?>