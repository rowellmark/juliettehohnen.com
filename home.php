<?php get_header(); ?>

<div id="sidePanel" class="fixed" data-aos="fade-right" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800" data-aos-delay="500">
	<ul class="aios-section-nav"></ul>
	<span class="scroll-down-text">Scroll Down</span>
</div>


<section id="hero" class="aios-scroll-section relative" data-aios-scroll-title="Slider">
	<div class="slideshow relative">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Slider") ) : ?><?php endif ?>
	</div><!-- end of slideshow -->
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Slider Tagline") ) : ?><?php endif ?>
</section>


<section id="hpFeaturedProperties" class="aios-scroll-section relative" data-aios-scroll-title="Featured Properties">
	<div class="default-container">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Exclusive Listings") ) : ?><?php endif ?>
	</div><!-- end of default container -->
</section><!-- end of featured properties -->

<section id="hpAbout" class="aios-scroll-section relative" data-aios-scroll-title="About">

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: About") ) : ?><?php endif ?>

</section><!-- end of hp about -->
<section id="hpTestimonials" class="aios-scroll-section relative" data-aios-scroll-title="Testimonials">
	<div class="default-container">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Testimonials") ) : ?><?php endif ?>
	</div><!-- end of container -->
</section><!-- end of testimonials -->

<section id="hpMeetTheTeam" class="aios-scroll-section relative" data-aios-scroll-title="Meet The Team">

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Meet The Team") ) : ?><?php endif ?>

</section><!-- end of meet the team -->
<section id="hpNeighborhood" class="aios-scroll-section relative" data-aios-scroll-title="NEIGHBORHOODS">
	<div class="default-container">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Neighborhoods") ) : ?><?php endif ?>
	</div>
</section><!-- end of neighborhood -->


<section id="hpPress" class="aios-scroll-section relative" data-aios-scroll-title="Press">

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Press") ) : ?><?php endif ?>

</section><!-- end of  press -->


<section id="hpInstagram" class="aios-scroll-section relative" data-aios-scroll-title="Instagram">
	<div class="default-container">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Instagram") ) : ?><?php endif ?>
	</div>
</section>
<?php get_footer(); ?>
