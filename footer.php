			<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>
			<div class="clearfix"></div>
			</div><!-- end of #inner-page-wrapper .inner -->
			</div><!-- end of #inner-page-wrapper -->
		<?php endif ?>
	</main>


	<section id="globNewsletter" class="aios-scroll-section relative" data-aios-scroll-title="Newsletter">

		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer: Newsletter") ) : ?><?php endif ?>

	</section><!-- end of news letter -->

	<footer id="footer" class="footer aios-scroll-section relative" data-aios-scroll-title="Footer">
		<div class="footer-container">


			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer: Logo") ) : ?><?php endif ?>


			<div class="footer-info flex justify-between">
				<div class="footer-contact-info">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer: Contact Info") ) : ?><?php endif ?>
				</div><!-- end of footer contact info -->

				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer: Social Media") ) : ?><?php endif ?>

				<div class="footer-nav">
					<h2>navigate</h2>
					<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'footernav', 'theme_location' => 'primary-menu','depth'=>1 ) ); ?>
				</div><!-- end of footer nav -->
			</div><!-- end of footer info -->
			<div class="footer-disclaimer">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer: Disclaimer") ) : ?><?php endif ?>
			</div><!-- end of footer disclaimer -->

			
			<div class="footer-copyright flex justify-between items-center">
				<p>Copyright&copy; <?php echo date('Y') ?>. Juliette Hohnen. All rights reserved. | <a href="#">Terms of Use</a> | <a href="/sitemap">Sitemap</a>. <?= do_shortcode('[agentimage_credits credits="Real Estate Website Design by <a target="_blank" href="https://www.agentimage.com" style="text-decoration:underline;font-weight:bold">Agent Image</a>"]')?></p>
				<div class="copyright-logos flex items-center justify-center">
					<i class="ai-font-eho"></i>
					<i class="ai-font-realtor-mls"></i>
				</div>
			</div><!-- footer copyright -->


		</div>		
	</footer>
	
	<?php do_action('aios_neighborhoods_footer')?>
	<?php do_action('aios_landing_page_footer')?>
	
	</div><!-- end of #main-wrapper -->


	<?php wp_footer(); ?>
</body>
</html>
