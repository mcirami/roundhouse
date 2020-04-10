<?php

get_header(); ?>

	<section class="conference_center">

		<div class="conference-swiper-container">
			<div class="swiper-wrapper">
				<?php if (have_rows('hero_slider')) : ?>
					<?php while (have_rows('hero_slider')) : the_row(); ?>
						<div class="swiper-slide">
							<?php $slide_img = get_sub_field('image'); ?>
							<img src="<?php echo $slide_img['url']; ?>" alt="<?php echo $slide_img['alt']; ?>" />
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div> <!-- swiper-wrapper -->
			<div class="swiper-pagination"></div>
			<div class="swiper-button-next"></div>
	        <div class="swiper-button-prev"></div>
		</div> <!-- swiper-container -->

		<div class="top_section">
			<h3><?php the_field('top_content_heading'); ?></h3>
			<?php the_field('top_content_copy'); ?>
		</div>
		<div class="middle_section">
			<div class="callout_container">
				<?php if (have_rows('middle_section')) : ?>
					<?php while (have_rows('middle_section')) : the_row(); ?>
						<?php $image = get_sub_field('image'); ?>
						<div class="column">
							<h1><?php the_sub_field('heading'); ?></h1>
							<p><?php the_sub_field('info_one'); ?></p> <span>&middot;</span> <p><?php the_sub_field('info_two'); ?></p>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link_text'); ?></a>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="button_wrap">
				<a class="menu_link" href="<?php the_field('white_button_link') ?>"><?php the_field('white_button_text'); ?></a>
			</div>
			<h1><?php the_field('bottom_section_heading'); ?></h1>
			<div class="link_wrap">
				<div class="arrow_link"><a href="<?php the_field('red_button_link'); ?>"><img class="down_arrow" src="<?php echo bloginfo('template_url'); ?>/images/red_arrow.png" /></a></div>
			</div>
		</div>
		<div class="bottom_section">
			<a href="<?php the_field('red_button_link') ?>"><?php the_field('red_button_text'); ?></a>
		</div>

	</section>

<?php get_footer(); ?>