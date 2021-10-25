<?php get_header();
$url =home_url('our-blog');
?>
		<div class="header_gutter"></div>

		<div id="primary" class="content-area">
			<section class="breadcrumb-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<nav class="breadcrumb">
								<a href="<?php echo get_home_url(); ?>"><?php echo  __('Home','spendebt');?></a>
								<span class="angle-right">/</span>
								<a href="<?php echo $url;?>"><?php echo __('Blog','spendebt');?></a>
								<span class="angle-right">/</span>
								<a class="current-page"><?php echo get_the_title();?></a>
							</nav>
						</div>
					</div>
				</div>
			</section><!-- /breadcrumb -->
			
			<section class="blog-page blog-page-details">
				<div class="container">
					<div class="row lr-9" data-sticky_parent>
						<div class="col-lg-9 col-md-12">
							<main class="main-content" data-sticky_column>
								<article class="blog-post">
									<div class="text">
										<a href="#"><span class="date text-uppercase"><?php echo get_the_date();?></span></a>
										<h1 class="title"><?php the_title();?></h1>

										<div class="media">
											<img src="<?php echo get_the_post_thumbnail();?>" class="img-fluid" alt="">
										</div>

										<div class="content">
											<?php the_content();?>
										</div>
									</div>
								</article><!-- /blog-post -->

								<div class="entry-footer d-flex flex-wrap align-items-center justify-content-between">
									<a href="#" class="btn-return"><i class="icon-arrow-left"></i> Return to Blog</a>

									<div class="share">
										<img src="../images/share.png" class="img-fluid" alt="">
									</div>
								</div>
                                    <?php get_template_part("call-to-action");?>
							</main>
						</div>

						<div class="col-lg-3 col-md-12">
							<aside class="sidebar" data-sticky_column>
								<div class="widget widget-featured">
									<h4 class="widget-title separator"><?php echo __("Featured","spendebt");?></h4>
									<div class="row lr-9">
										<div class="col-lg-12 col-md-6 col-sm-6">
                                            
                                        <?php
												// The Query
												$args = array(
													'post_type' => 'post',
													'meta_key' => '_is_ns_featured_post',
													'meta_value' => 'yes',
													'posts_per_page'=> 3,
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
									<h4 class="widget-title separator">Get the App</h4>

									<ul class="store list-unstyled lr-9 d-flex flex-wrap align-items-center">
                                        <?php 
                                            if(is_active_sidebar('icon-sidebar')){
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