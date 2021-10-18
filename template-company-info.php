<?php

 /* Template Name: company-info*/

 get_header();
 $page_banner = get_field('page_banner');
 $info = get_field ('company_info');
 $founder = get_field('meet_founder');

?>
 
		 <div class="header_gutter"></div>
		 <section class="page-header page-header-about d-flex align-items-center">
			 <div class="container">
				 <div class="row">
					 <div class="col-12">
						 <div class="entry-title">
							<?php echo $page_banner['heading'];?>
						 </div>
					 </div>
				 </div>
			 </div>
 
			 <div class="background rellax">
				 <img src="<?php echo $page_banner['image'];?>" class="img-fluid" alt="">
			 </div>
		 </section><!-- /page-header -->
 
		 <div id="primary" class="content-area">
 
			 <section class="company-info">
				 <div class="container">
					 <div class="row align-items-center">
						 <div class="col-lg-6 col-md-12">
							 <div class="media radius">
								 <img src="<?php echo $info['info_image'];?>" class="img-fluid" alt="">
							 </div>
						 </div>
 
						 <div class="col-lg-6 col-md-12">
							 <div class="content">
								 <div class="entry-title">
									 <h4 class="sub-title"><?php echo $info['sub_title'];?></h4>
									 <h1 class="title"><?php echo $info['company_title'];?></h1>
								 </div>
 
								 <?php echo $info['company_content'];?>
							 </div>
						 </div>
					 </div>
				 </div>
			 </section><!-- /company-info -->
 
			 <div class="container">
				 <div class="row">
					 <div class="col-12">
						 <hr>
					 </div>
				 </div>
			 </div>
 
			 <section class="meet-founder">
				 <div class="container">
					 <div class="row flex-row-reverse align-items-center">
						 <div class="col-lg-5 col-md-12">
							 <div class="media with-note radius">
								 <img src="<?php echo $founder['founder_image'];?>" class="img-fluid" alt="">
 
								 <h5 class="note">Founder & CEO of Spendebt <span>  Kiley Summers</span></h5>
							 </div>
						 </div>
 
						 <div class="col-lg-7 col-md-12">
							 <div class="content">
								 <div class="entry-title">
									 <h4 class="sub-title"><?php echo $founder['founder_title'];?></h4>
									 <h1 class="title"><?php echo $founder['founder_sub_title'];?></h1>
								 </div>
 
								<?php echo $founder['founder_content'];?>
							 </div>
						 </div>
					 </div>
				 </div>
			 </section><!-- /company-info -->

			 <?php 
			 get_template_part("featured");
			 ?>
 
			 <!-- <section class="featured">
				 <div class="container">
					 <div class="row">
						 <div class="col-12">
							 <div class="content text-center">
								 <div class="entry-title ">
									 <h2 class="title white">Featured In...</h2>
								 </div>
 
								 <ul class="client-logos list-unstyled">
									 <li><a><img src="../images/client-logo-1.png" class="img-fluid" alt=""></a></li>
									 <li><a><img src="../images/client-logo-2.png" class="img-fluid" alt=""></a></li>
									 <li><a><img src="../images/client-logo-3.png" class="img-fluid" alt=""></a></li>
									 <li><a><img src="../images/client-logo-4.png" class="img-fluid" alt=""></a></li>
									 <li><a><img src="../images/client-logo-5.png" class="img-fluid" alt=""></a></li>
									 <li><a><img src="../images/client-logo-6.png" class="img-fluid" alt=""></a></li>
								 </ul>
							 </div>
						 </div>
					 </div>
				 </div>
			 </section>/featured -->
 
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
									 <a href="blog-details.html"><img src="../images/blog-post-1.jpg" class="img-fluid" alt=""></a>
								 </div>
 
								 <div class="text">
									 <a href="blog-details.html"><h5 class="title">St. Louis tech startup showing consumers how to pay off debts when spending money</h5></a>
								 </div>
							 </article>
						 </div><!-- /blog-post -->
 
						 <div class="col-lg-4 col-sm-6">
							 <article class="blog-post">
								 <div class="media">
									 <a href="blog-details.html"><img src="../images/blog-post-4.jpg" class="img-fluid" alt=""></a>
								 </div>
 
								 <div class="text">
									 <a href="blog-details.html"><h5 class="title">The Bourbon Friday Show with Kiley Summers from Spendebt</h5></a>
								 </div>
							 </article>
						 </div><!-- /blog-post -->
						 
						 <div class="col-lg-4 col-sm-6">
							 <article class="blog-post">
								 <div class="media">
									 <a href="blog-details.html"><img src="../images/blog-post-5.jpg" class="img-fluid" alt=""></a>
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
 
 <?php
 get_footer();
 ?>
