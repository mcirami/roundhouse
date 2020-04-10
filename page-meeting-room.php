<?php
/**
 * Template Name: Meeting Room
 *
 */

get_header(); ?>

<section class="meeting_rooms">
    <div class="hero_container">
        <?php $heroImg = get_field('hero_image'); ?>
        <img src="<?php echo $heroImg['url']; ?>" alt=""/>
    </div>
    <div class="container title_container">
        <h1><?php the_title(); ?></h1>
    </div>

    <article class="meetings_content">
        <div class="meeting_container">
            <div class="container">
                <div class="meeting_content">
                    <?php if( have_rows('meeting_content') ) : ?>
                        <?php while( have_rows('meeting_content') ) : the_row(); ?>
                        <div>
                            <h3><?php the_sub_field('meetings_title'); ?></h3>
                            <?php the_sub_field('meetings_content'); ?>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="map_image">
                    <?php if(has_post_thumbnail() ) : ?>
                        <?php echo get_the_post_thumbnail(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div><!-- end of meeting container -->
        <div class="meetings_slider">
            <div class="container">
                <div class="meetings-swiper-container">
                    <div class="swiper-wrapper meetings-wrapper">
                        <?php if( have_rows('meeting_sliders') ) : ?>
                            <?php while( have_rows('meeting_sliders') ) : the_row(); ?>
                                <div class="swiper-slide">
                                    <?php $sliderImg = get_sub_field('slider_img'); ?>
                                    <img src="<?php echo $sliderImg['url']; ?>" alt=""/>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div><!-- end of meetings slider -->
        <div class="package_container">
            <div class="container">
                <h2>Packages</h2>
                <div class="package_content">
                    <div class="package_deals">
                        <h3>One Day</h3>
                        <p class="package_content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                        <span class="price">$1175</span>
                    </div>
                    <div class="package_deals">
                        <h3>One Day</h3>
                        <p class="package_content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                        <span class="price">$1175</span>
                    </div>
                    <div class="package_deals">
                        <h3>One Day</h3>
                        <p class="package_content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                        <span class="price">$1175</span>
                    </div>
                </div>
            </div>
        </div><!-- end of package container -->
        <div class="book_container">
            <div class="container">
                <h1>Book Now</h1>
                <div class="arrow_link">
                    <a href="#"><img class="down_arrow" src="<?php echo bloginfo('template_url'); ?>/images/red_arrow.png" /></a>
                </div>
            </div>
            <div class="bottom_section">
                <a href="#">Book an event</a>
            </div>
        </div><!-- end of book container -->
    </article>



</section>



<?php get_footer(); ?>