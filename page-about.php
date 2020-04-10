<?php

get_header(); ?>

	<section class="about">
		<div class="page_header">
			<div class="container">
				<h1><?php the_field('page_title'); ?></h1>
				<div class="description">
					<p><?php the_field('page_description'); ?></p>
				</div>
			</div>
		</div>
		<div class="hero_image">
			<?php $hero_image = get_field('image'); ?>
			<img src="<?php echo $hero_image['url']; ?>" alt="<?php $hero_image['alt']; ?>"/>
		</div>
		<div class="top_section">
			<div class="container">
				<h2 class="tab"><?php the_field('top_section_heading'); ?></h2>
				<div class="full_width_content">
					<?php the_field('full_width_text'); ?>
				</div>
				<div class="two_column_content">
					<?php if (have_rows('two_column_text')) : ?>
						<?php while (have_rows('two_column_text')) : the_row(); ?>					
							<div class="column">
								<p><?php the_sub_field('heading'); ?></p>
								<?php the_sub_field('description'); ?>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="amenities-swiper-container">
			<div class="swiper-wrapper">
				<?php if (have_rows('slider')) : ?>
					<?php while (have_rows('slider')) : the_row(); ?>
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
		<div class="bottom_section">
			<?php if (have_rows('bottom_section')) : ?>
				<?php while (have_rows('bottom_section')) : the_row(); ?>
					<div class="column">
						<h1><?php the_sub_field('heading'); ?></h1>
						<p class="sub_heading"><?php the_sub_field('sub_heading'); ?></p>
						<?php the_sub_field('description'); ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>	
	</section>

<?php get_footer(); ?>