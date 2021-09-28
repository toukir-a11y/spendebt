<?php
$footer= get_field('footer','option');
?>

<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<div class="footer-logo">
							<a href="index.html">
								<img src="<?php echo $footer['image'];?>" class="img-responsive" alt="">
							</a>
						</div>

						<ul class="footer-menu list-inline">
						<?php
				wp_nav_menu(array(
					'theme_location'     => 'top_menu',
					'depth'              => 1,
					'container'          => false,
					'menu_class'         => 'list-inline',
					'menu_id'            => '',
					'fallback_cb'        => 'wp_bootstrap_navwalker::fallback',
					'walker'             => new wp_bootstrap_navwalker()
				));
				?>
						</ul>

						<ul class="footer-menu list-inline">
							<li><a href="#" target="_blank"><span class="icon-play-store"></span></a></li>
							<li><a href="#" target="_blank"><span class="icon-apple"></span></a></li>
							<li class="btn-menu"><a href="<?php echo $footer['flink'];?>"><?php echo $footer['flink_text'];?></a></li>
						</ul>

						<div class="subscribe-newsletter text-center">
							<h4 class="title"><?php echo $footer['title'];?></h4>
							<img src="<?php echo $footer['simage'];?>" class="img-fluid" alt="">
						</div>

						<ul class="social-media list-inline">
							<li><a href="#" class="icon-facebook" target="_blank"></a></li>
							<li><a href="#" class="icon-instagram" target="_blank"></a></li>
							<li><a href="#" class="icon-linkedin" target="_blank"></a></li>
							<li><a href="#" class="icon-twitter" target="_blank"></a></li>
						</ul>

						<div class="copyright d-flex align-items-center justify-content-center">
							<p><?php echo $footer['title_two'];?></p>
							<ul class="footer-links list-inline"> 
												<?php
									wp_nav_menu(array(
										'theme_location'     => 'footer_menu',
										'depth'              => 1,
										'container'          => false,
										'menu_class'         => 'list-inline',
										'menu_id'            => '',
										'fallback_cb'        => 'wp_bootstrap_navwalker::fallback',
										'walker'             => new wp_bootstrap_navwalker()
									));
									?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer><!-- /footer -->

		
		<?php wp_footer();?>
	</body>
</html>