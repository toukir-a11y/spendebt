<?php get_header();
$banner = get_field('banner');
$work = get_field('how_it_work');

// for group field within repeater field
$group = get_field('how_it_work');
$repeaters = $group['register'];

$price = get_field('price_plan');
$group = get_field('price_plan');
$frepeaters = $group['features_list'];

$singup = get_field('sing_up');
$testimonial = get_field('testimonial');
var_dump($testimonial);
?>
		<section class="banner">
			<div class="container position-relative">
				<div class="row">
					<div class="col-12">
						<div class="content">
							<div class="entry-title">
								<h1 class="title animated fadeInLeft"><?php echo $banner['heading'];?></h1>
							</div>

							<p class="animated fadeInLeft delay-1s"><?php echo $banner['title'];?></p>

							<div class="button-group d-flex align-items-center">
								<a href="<?php echo $banner['link'];?>" class="btn animated fadeInLeft delay-1s"><?php echo $banner['link_text'];?></a>

								<button class="scrollDown animated fadeInLeft delay-2s" data-space="80"><i class="icon-arrow-down"></i></button>
							</div>
						</div>
					</div>
				</div>

				<div class="background animated fadeInUp delay-1s">
					<img src="<?php echo $banner['bg_image'];?>" class="img-fluid" alt="">
				</div>
			</div>
		</section><!-- /banner -->

		<div id="primary" class="content-area">

			<section class="home-how-works">
				<div class="money rellax animated fadeInUp delay-2s"><img src="<?php echo $work['image'];?>" class="svg img-fluid" alt=""></div>
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="entry-title text-center">
								<h2 class="title"><?php echo $work['title'];?></h2>
								<h4 class="font-weight-normal"><?php echo $work['heading'];?></h4>
							</div>

							<div class="media with-note radius">
								<a href="<?php echo $work['link'];?>" class="popup-video" data-effect="mfp-move-from-top vertical-middle">
									<img src="<?php echo $work['video_cover_image'];?>" class="img-fluid" alt="">
									<h5 class="note"><span><?php echo $work['video_text'];?></span><?php echo $work['video_time'];?></h5>
								</a>
							</div>
						</div>
					</div>

													
					<div class="row eq-height">
						
					<?php

						$i=1;
						foreach($repeaters as $repeater):
						?>

						<div class="col-md-4 col-sm-12">
							<div class="how-works-item text-center">
								<div class="icon-wrap">
									<div class="icon">
							
										<i class="icon-<?php echo $repeater['select'];?>"></i>

									</div>
								</div>
								<div class="text">
									<h4 class="title"><?php echo $repeater['heading_two'];?></h4>															
									<p><?php echo $repeater['title_two'];?></p>
								</div>
							</div>
						</div><!-- /how-works-item -->

						<?php
							endforeach;						
						?>


						<!-- <div class="col-md-4 col-sm-12">
							<div class="how-works-item text-center">
								<div class="icon-wrap">
									<div class="icon">
										<i class="icon-bank"></i>
									</div>
								</div>

								<div class="text">
									<h4 class="title">Link Accounts</h4>
									<span class="step">Step 2</span>
									<p>Link your bank accounts and define which debts to pay off</p>
								</div>
							</div>
						</div>/how-works-item -->

						<!-- <div class="col-md-4 col-sm-12">
							<div class="how-works-item text-center">
								<div class="icon-wrap">
									<div class="icon">
										<i class="icon-money"></i>
									</div>
								</div>

								<div class="text">
									<h4 class="title">Define Payments</h4>
									<span class="step">Step 3</span>
									<p>Specify micro transaction size (anything above $.50)</p>
								</div>
							</div>
						</div>/how-works-item -->
					</div>
				</div>
			</section><!-- /home-how-works -->


			<section class="pricing">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="content">
								<div class="entry-title text-center">
								<?php echo $price['heading'];?>
								</div>

								<?php echo $price['price'];?>

								<ul class="features list-unstyled">
									<?php foreach ($frepeaters as $nfrepeater):?>
									<li><?php echo $nfrepeater['features'];?></li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section><!-- /pricing -->

			<section class="spendebt-difference">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="entry-title text-center">
								<h2 class="title">The Spendebt Difference</h2>
								<h4 class="font-weight-normal">What makes us different?</h4>
								<p>With Spendebt you can stop rounding up and start paying down.</p>
							</div>
						</div>
					</div>

					<div class="row eq-height position-relative">
						<div class="col-lg-6 col-md-12">
							<div class="difference-item text-center">
								<h2 class="title">Competition</h2>
								<span class="sub-title">Rounding up. Getting Nowhere.</span>
								<p>The "Other Guys" only allow you to round up your purchases to the next dollar.</p>

								<span class="note">This process is slow!</span>

								<ul class="list-unstyled">
									<li>
										<h4 class="label">Coffee</h4>
										<h4 class="value">$<span class="counter">4.37</span> + <span class="after-value">$<span class="counter">0.63</span></span></h4>
									</li>
									<li>
										<h4 class="label">Grocery</h4>
										<h4 class="value">$<span class="counter">87.62</span> + <span class="after-value">$<span class="counter">0.28</span></span></h4>
									</li>
									<li>
										<h4 class="label">Gas</h4>
										<h4 class="value">$<span class="counter">32.00</span> + <span class="after-value">$<span class="counter">0.00</span></span></h4>
									</li>
								</ul>

								<div class="total d-flex align-items-center justify-content-center">
									<h4 class="font-weight-normal">Savings of</h4>
									<h2 class="value">$<span class="counter">0.91</span></h2>
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-md-12">
							<div class="difference-item color text-center">
								<h2 class="title"><img src="<?php echo get_theme_file_uri();?>/assets/images/logo-diff.png" class="img-fluid" alt=""></h2>
								<span class="sub-title">Specified Payment. Paying Down.</span>
								<p>We allow you to specify any amount between $.50 and $5.00 per transaction!</p>

								<span class="note">This user specified $1.50.</span>

								<ul class="list-unstyled">
									<li>
										<h4 class="label">Coffee</h4>
										<h4 class="value">$<span class="counter">4.37</span> + <span class="after-value">$<span class="counter">0.63</span></span></h4>
									</li>
									<li>
										<h4 class="label">Grocery</h4>
										<h4 class="value">$<span class="counter">87.62</span> + <span class="after-value">$<span class="counter">0.28</span></span></h4>
									</li>
									<li>
										<h4 class="label">Gas</h4>
										<h4 class="value">$<span class="counter">32.00</span> + <span class="after-value">$<span class="counter">0.00</span></span></h4>
									</li>
								</ul>

								<div class="total d-flex align-items-center justify-content-center">
									<h4 class="font-weight-normal">Savings of</h4>
									<h2 class="value">$<span class="counter">4.50</span></h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section><!-- /spendebt-difference -->

			<section class="sign-up">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="entry-title">
								<h2 class="title"><?php echo $singup['title'];?></h2>
								<a href="<?php echo $singup['link'];?>" class="btn"><?php echo $singup['link_text'];?></a>
							</div>
						</div>
					</div>
				</div>
				<div class="media">
					<img src="<?php echo $singup['singup_image'];?>" alt="">
				</div>
			</section><!-- /home-about -->

		

			<section class="testimonials">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="entry-title text-center">
								<h2 class="title"><?php echo $testimonial_title;?></h2>
							</div>
						</div>
					</div>
					<?php				
					if( have_rows('testimonial') ):

while( have_rows('testimonial') ) : the_row();

	$testimonial_title = get_sub_field('testimonial_title');
	$quate_text = get_sub_field('quate_text');
	$video_link = get_sub_field('video_link');
	$video_image = get_sub_field('video_image');
	$name = get_sub_field('name');
	$location = get_sub_field('location');					
?>

					<div class="row">
						<div class="col-12">
							<div class="testimonial-slider">
								<div class="testimonial-item text-center">
									<div class="center">
										<div class="icon">
											<i class="icon-quote-left"></i>
											<i class="icon-quote-right"></i>
										</div>

										<div class="quote">
											<?php echo $quate_text;?>
										</div>

										<a href="<?php echo $video_link;?>" class="popup-video" data-effect="mfp-move-from-top vertical-middle">
											<img src="<?php echo $video_image;?>" class="img-fluid" alt="">
										</a>

										<div class="quote-bottom">
											<h4 class="name"><?php echo $name;?></h4>
											<span class="location text-uppercase"><?php echo $location;?></span>
										</div>
									</div>
								</div>	

							</div>

							<div class="slider-progress-bar">
								<span class="progress" style="width: 10%;"></span>
							
							</div>
		<?php 
							
						endwhile;
					endif;
								?>
						
					</div>
				</div>
			</div>
		</div>

			</section><!-- /testimonials -->

			

			<section class="featured">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="content text-center">
								<div class="entry-title ">
									<h2 class="title white">Featured In...</h2>
								</div>

								<ul class="client-logos list-unstyled">
									<li><a><img src="<?php echo get_theme_file_uri();?>/assets/images/client-logo-1.png" class="img-fluid" alt=""></a></li>
									<li><a><img src="<?php echo get_theme_file_uri();?>/assets/images/client-logo-2.png" class="img-fluid" alt=""></a></li>
									<li><a><img src="<?php echo get_theme_file_uri();?>/assets/images/client-logo-3.png" class="img-fluid" alt=""></a></li>
									<li><a><img src="<?php echo get_theme_file_uri();?>/assets/images/client-logo-4.png" class="img-fluid" alt=""></a></li>
									<li><a><img src="<?php echo get_theme_file_uri();?>/assets/images/client-logo-5.png" class="img-fluid" alt=""></a></li>
									<li><a><img src="<?php echo get_theme_file_uri();?>/assets/images/client-logo-6.png" class="img-fluid" alt=""></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section><!-- /featured -->

			<section class="latest-news">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="entry-title text-center">
								<h2 class="title">Company News & Updates</h2>
								<h4 class="font-weight-normal">The Latest Happenings Inside the Spendebt Family</h4>
							</div>
						</div>
					</div>

					<div class="row lr-9">
						<div class="col-lg-4 col-sm-6">
							<article class="blog-post">
								<div class="media">
									<a href="blog-details.html"><img src="<?php echo get_theme_file_uri();?>/assets/images/blog-post-1.jpg" class="img-fluid" alt=""></a>
								</div>

								<div class="text">
									<a href="blog-details.html"><h5 class="title">St. Louis tech startup showing consumers how to pay off debts when spending money</h5></a>
								</div>
							</article>
						</div><!-- /blog-post -->

						<div class="col-lg-4 col-sm-6">
							<article class="blog-post">
								<div class="media">
									<a href="blog-details.html"><img src="<?php echo get_theme_file_uri();?>/assets/images/blog-post-4.jpg" class="img-fluid" alt=""></a>
								</div>

								<div class="text">
									<a href="blog-details.html"><h5 class="title">The Bourbon Friday Show with Kiley Summers from Spendebt</h5></a>
								</div>
							</article>
						</div><!-- /blog-post -->
						
						<div class="col-lg-4 col-sm-6">
							<article class="blog-post">
								<div class="media">
									<a href="blog-details.html"><img src="<?php echo get_theme_file_uri();?>/assets/images/blog-post-5.jpg" class="img-fluid" alt=""></a>
								</div>

								<div class="text">
									<a href="blog-details.html"><h5 class="title">Startup masters 054: Spendebt App with Kiley Summers</h5></a>
								</div>
							</article>
						</div><!-- /blog-post -->
					</div>
				</div>
			</section><!-- /latest-news -->

		</div><!-- /primary -->

<?php get_footer();?>