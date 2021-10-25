<?php get_header();?>

		<div class="header_gutter"></div>
		<section class="featured-blog-posts">
			<div class="fbp-slider-controls d-flex align-items-center">
				<div class="container">
					<div class="col-12">
						<div class="fbp-slider-control"></div>	
					</div>
				</div>
			</div>
			<div class="fbp-slider">

			<?php
					// The Query
					$args = array(
						'post_type' => 'post',
						'posts_per_page'=> 3,
						'order_by' => 'DESC',
					);

					$the_query = new WP_Query($args);

					// The Loop
					if ($the_query->have_posts()) {

						while ($the_query->have_posts()) {

							$the_query->the_post();

					?>
				<div class="slider-item d-flex align-items-center justify-content-between coverbg" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<article class="blog-post text-center">
									<a href="#"><span class="date" data-animation="fadeInUp" data-delay="0.6s"><?php echo  get_the_date(); ?></span></a>
									<a href="blog-details.html"><h1 class="title" data-animation="fadeInUp" data-delay="0.8s"><?php echo  get_the_title(); ?></h1></a>
									<a href="blog-details.html" class="btn btn-primary" data-animation="fadeInUp" data-delay="1s">Read Story</a>
								</article>
							</div>
						</div>
					</div>
				</div>

					<?php
							}
							} else {
							echo "no posts found";
							}
							/* Restore original Post Data */
							wp_reset_postdata();
							?>
			</div>
		</section><!-- /featured-blog-posts -->

		<div id="primary" class="content-area">			
			<section class="blog-page">
				<div class="container">
					<div class="row">
						<div class="col-12">
						<?php get_search_form()?>
						</div>
					</div>

					<div class="row lr-9" data-sticky_parent>
						<div class="col-lg-9 col-md-12">
							<main class="main-content" data-sticky_column>
								<h4 class="widget-title separator"> <?php  echo shortcodify($text);?></h4>
								<?php

									while (have_posts()):

										the_post();
									?>
								
								<article class="blog-post d-flex align-items-center">
									<div class="media float-left">
										<a href="blog-details.html">
											<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
										</a>
									</div>

									<div class="text">
										<a href="#"><span class="date text-uppercase"><?php echo get_the_date();?></span></a>

										<a href="<?php the_permalink();?>"><h3 class="title"><?php echo get_the_title();?></h3></a>
									</div>
								</article><!-- /blog-post -->
									<?php endwhile;?>
								
								<div class="pagination" >

								<?php if ( get_previous_posts_link() || get_next_posts_link() ): ?>
							
							<div class="float-left" >
							
								<?php previous_posts_link('<i class="icon-arrow-left">""</i>'); ?>
							</div>
							<div class="float-right">
								<?php next_posts_link('<i class="icon-arrow-right"></i>');?>	
									
							</div>

							<?php endif;?>

								</div><!-- /pagination -->
							
									<?php
									get_template_part("call-to-action");
								?>

							</main>
						</div>

						<div class="col-lg-3 col-md-12">
							<aside class="sidebar" data-sticky_column>
								<div class="widget widget-featured">
									<h4 class="widget-title separator"><?php echo esc_html('Featured','spendebt');?></h4>

									<div class="row lr-9">
										<div class="col-lg-12 col-md-6 col-sm-6">

										<?php
												// The Query
												$args = array(
													'post_type' => 'post',
													'meta_key' => '_is_ns_featured_post',
													'meta_value' => 'yes',
													'posts_per_page'=> 2,
													'order_by' => 'DESC',
												);

												$the_query = new WP_Query($args);

												// The Loop
												if ($the_query->have_posts()) {

													while ($the_query->have_posts()) {

														$the_query->the_post();
												?>
											<article class="blog-post">
												<div class="media">
													<a href="blog-details.html">
														<img src="<?php echo get_the_post_thumbnail_url();?>" class="img-fluid" alt="">
													</a>
												</div>

												<div class="text">
													<a href="#"><span class="date text-uppercase"><?php echo get_the_date();?></span></a>

													<a href="blog-details.html"><h5 class="title"><?php echo get_the_title();?></h5></a>
												</div>
											</article><!-- /blog-post -->
											<?php

												}
												} else {
												echo "no posts found";
												}
												/* Restore original Post Data */
												wp_reset_postdata();
												?>
										</div>
									</div>
								</div><!-- /widget -->

								<div class="widget widget-store">
									<h4 class="widget-title separator"><?php echo esc_html('Get the App','spendebt')?></h4>

									<ul class="store list-unstyled lr-9 d-flex flex-wrap align-items-center">
										<?php
											if (is_active_sidebar("icon-sidebar")){
												dynamic_sidebar('icon-sidebar');
											}
										?>
										<!-- <li class="col-lg-12 col-sm-6"><a href="#" class="btn icon-apple" target="_blank">Get it on the App Store</a></li>
										<li class="col-lg-12 col-sm-6"><a href="#" class="btn btn-base icon-play-store" target="_blank">Get it on Google Play</a></li> -->
									</ul>
								</div><!-- /widget -->
							</aside>
						</div>
					</div>
				</div>
			</section><!-- /blog-page -->

		</div><!-- /primary -->

<?php get_footer();?>