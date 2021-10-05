<!doctype html>
<html lang="en">
  	<head>
		<!-- Required meta tags -->
	    <meta charset="utf-8">
	    <?php wp_head();
		$header= get_field('header','option');
		
		
		?>
	</head>
	<body>
		<div id="sidr" class="mobile-header d-none">
			<div class="navbar-header d-flex align-items-center justify-content-between">
				<div class="logo">
				 	<a class="navbar-brand" href="index.html">
				 		<img src="<?php echo $header['logo'];?>" class="img-fluid" alt="">
				 	</a>
				</div>

			 	<a class="navbar-toggle in">
					<span class="icon-bar"></span>
				  	<span class="icon-bar"></span>
				  	<span class="icon-bar"></span>
			  	</a>
			</div>

			<div class="navigation">
				<!-- <ul class="navbar-nav">
			  		<li class="spendebt"><a href="discover.html">Discover Spendebt</a></li>
			  		<li><a href="blog.html">Our Blog</a></li>
			  		<li><a href="about.html">Company Info</a></li>
			  		<li><a href="contact.html">Contact Us</a></li>
			  	</ul> -->
				  <?php
				wp_nav_menu(array(
					'theme_location'     => 'top_menu',
					'depth'              => 2,
					'container'          => false,
					'menu_class'         => 'navbar-nav',
					'menu_id'            => '',
					'fallback_cb'        => 'wp_bootstrap_navwalker::fallback',
					'walker'             => new wp_bootstrap_navwalker()
				));
				?>

			  	<!-- <ul class="navbar-nav navbar-right">
					<li><a href="#"><span class="icon-play-store"></span></a></li>
					<li><a href="#"><span class="icon-apple"></span></a></li>
					<li class="btn-menu"><a href="#">Login</a></li>
				</ul> -->

		  	</div><!-- /navigation -->
		</div> <!-- /mobile-header -->

		<header class="header transparent">
			<nav class="navbar navbar-expand">
			  	<div class="container d-flex justify-content-between">
					<div class="navbar-header">
					  	<div class="logo">
						 	<a class="navbar-brand" href="index.html">
						 		<img src="<?php echo $header['menu_logo'];?>" class="img-fluid" alt="">
						 	</a>
						</div>
					</div>

					<div class="collapse navbar-collapse">
						<!-- <ul class="navbar-nav ml-auto">
					  		<li class="spendebt"><a href="discover.html">Discover Spendebt</a></li>
					  		<li><a href="blog.html">Our Blog</a></li>
					  		<li><a href="about.html">Company Info</a></li>
					  		<li><a href="contact.html">Contact Us</a></li>			
					  	</ul> -->

						  <?php
				wp_nav_menu(array(
					'theme_location'     => 'top_menu',
					'depth'              => 2,
					'container'          => false,
					'menu_class'         => 'navbar-nav ml-auto',
					'menu_id'            => '',
					'fallback_cb'        => 'wp_bootstrap_navwalker::fallback',
					'walker'             => new wp_bootstrap_navwalker()
				));
				?>

						<ul class="navbar-nav navbar-right ml-auto">
							<li><a href="#"><span class="icon-play-store"></span></a></li>
							<li><a href="#"><span class="icon-apple"></span></a></li>
							<li class="btn-menu"><a href="<?php echo $header['link'];?>"><?php echo $header['link_text'];?></a></li>
							<li class="mobile-navbar-toggler d-xl-none d-lg-none">
								<a href="#sidr" class="navbar-toggle">
									<span class="icon-bar"></span>
								  	<span class="icon-bar"></span>
								  	<span class="icon-bar"></span>
							  	</a>
							</li>
						</ul>
					</div>
			  	</div><!-- /container -->
			</nav><!--/ Navbar -->
		</header>
		<div class="header_gutter"></div>
