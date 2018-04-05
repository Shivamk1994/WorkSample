<footer class="footer-area" style="background-image: url('<?php echo get_template_directory_uri()?>/images/footer.jpg')">
	<div class="container">
		<div class="container_outer">
			<div class="footer-top-content clearfix">
				<div class="prague-footer-main-block" data-aos="fade-right">
					<div class="prague-logo">
						<a href="#">
							<img src="<?php echo get_theme_mod('logo_url'); ?>" class="attachment-full size-full" alt="">
						</a>
					</div>

					<div class="footer-main-content">
						<p><?php echo get_theme_mod('footer_link_left'); ?></p>
					</div>
				</div>
				<div class="prague-footer-info-block" data-aos="fade-left">
					<h6 class="footer-info-block-title">GET IN TOUCH</h6>
						<div class="footer-info-block-content">
							<p><a href="tel:<?php echo get_theme_mod('info_phone'); ?>"><?php echo get_theme_mod('info_phone'); ?></a></p>
							<p><a href="mailto:<?php echo get_theme_mod('info_email'); ?>"><?php echo get_theme_mod('info_email'); ?></a></p>
							<p><?php echo get_theme_mod('info_location'); ?></p>
						</div>
				</div>
			</div>
			<div class="footer-bottom-content" data-aos="zoom-out" data-aos-duration="1500">
				<!-- Footer copyright -->
				<div class="footer-copyright">
					<?php echo get_theme_mod('footer_link'); ?>
				</div>
				<div class="footer-copyright powered">
					<?php echo get_theme_mod('footer_link_bottom'); ?>
				</div>
				<!-- End footer copyright -->
				<div class="prague-social-nav hide">
					<ul class="social-content">
						<li>
							<a target="_blank" href="#">
								<i aria-hidden="true" class="fa fa-behance"></i>
							</a>
						</li>
						<li>
							<a target="_blank" href="#">
								<i aria-hidden="true" class="fa fa-twitter"></i>
							</a>
						</li>
						<li>
							<a target="_blank" href="#">
								<i aria-hidden="true" class="fa fa-facebook"></i>
							</a>
						</li>
						<li>
							<a target="_blank" href="#">
								<i aria-hidden="true" class="fa fa-pinterest-p"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>

		</div>
	</div>
</footer>
	<?php wp_footer(); ?>
</body>
</html>
