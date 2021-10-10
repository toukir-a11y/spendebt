<?php

 /* Template Name: discover*/
 get_header();

 $banner = get_field('page_banner');
 $video = get_field('video_overview');
 var_dump($video);
?>

 <section class="page-banner d-flex align-items-center" style="background-image: url(<?php echo $banner['banner_image'];?>)">
 <div class="container">
	 <div class="row">
		 <div class="col-12">
			 <div class="content">
				 <div class="entry-title">
					 <h4 class="sub-title"><?php echo $banner['title'];?></h4>
					 <h1 class="title white"><?php echo $banner['sub_title'];?></h1>

					 <div class="button-group d-flex align-items-center">
						 <a href="<?php echo $banner['sing_up_link'];?>" class="btn btn-primary"><?php echo $banner['sing_up_text'];?></a>

						 <button class="scrollDown" data-space="80"><i class="icon-arrow-down"></i></button>
					 </div>
				 </div>
			 </div>
		 </div>
	 </div>
 </div>
</section><!-- /page-banner -->

<div id="primary" class="content-area">

 <section class="how-works">
	 <div class="container">
		 <div class="row">
			 <div class="col-12">
				 <div class="entry-title separator">
					 <h2 class="title">How it Works</h2>
					 <h4 class="font-weight-normal">Spendebt helps you get rid of your debt faster</h4>
				 </div>	
			 </div>
		 </div>
	 </div>

	 <div class="work-steps">
		 <div class="container">
			 <div class="row align-items-center">
				 <div class="col-sm-8">
					 <div class="content" data-number="001">
						 <div class="icon float-left">
							 <i class="icon-edit"></i>
							 <span class="number">1</span>
						 </div>

						 <div class="text">
							 <h2 class="title">Register</h2>
							 <p>Subscribe and create a user profile</p>
							 <a href="#" class="btn">Sign Up</a>
						 </div>
					 </div>
				 </div>

				 <div class="col-sm-4">
					 <div class="media">
						 <img src="assets/images/mobile.png" class="img-fluid" alt="">
					 </div>
				 </div>
			 </div>
		 </div>
	 </div><!-- /work-steps -->

	 <div class="work-steps">
		 <div class="container">
			 <div class="row align-items-center">
				 <div class="col-sm-8">
					 <div class="content" data-number="002">
						 <div class="icon float-left">
							 <i class="icon-bank"></i>
							 <span class="number">2</span>
						 </div>

						 <div class="text">
							 <h2 class="title">Link Accounts</h2>
							 <p>Link your bank accounts and define which debts to pay off</p>
							 <a href="#" class="btn">Sign Up</a>
						 </div>
					 </div>
				 </div>

				 <div class="col-sm-4">
					 <div class="media">
						 <img src="assets/images/mobile.png" class="img-fluid" alt="">
					 </div>
				 </div>
			 </div>
		 </div>
	 </div><!-- /work-steps -->

	 <div class="work-steps">
		 <div class="container">
			 <div class="row align-items-center">
				 <div class="col-sm-8">
					 <div class="content" data-number="003">
						 <div class="icon float-left">
							 <i class="icon-money"></i>
							 <span class="number">3</span>
						 </div>

						 <div class="text">
							 <h2 class="title">Define Payments</h2>
							 <p>Specify micro transaction size (anything above $.50)</p>
							 <a href="#" class="btn">Sign Up</a>
						 </div>
					 </div>
				 </div>

				 <div class="col-sm-4">
					 <div class="media">
						 <img src="assets/images/mobile.png" class="img-fluid" alt="">
					 </div>
				 </div>
			 </div>
		 </div>
	 </div><!-- /work-steps -->
 </section><!-- /how-works -->

 <section class="video-overview" style="--background-image: url(assets/images/video-overview.jpg)">
	 <div class="container">
		 <div class="row align-items-center">
			 <div class="col-lg-5 col-md-5 col-sm-12">
				 <div class="entry-title">
					 <h2 class="title white"><?php echo $video['video_title'];?></h2>
					 <p><?php echo $video['video_content'];?>
</p>
				 </div>
			 </div>

			 <div class="col-lg-7 col-md-7 col-sm-12">
				 <div class="media with-note radius">
					 <a href="<?php echo $video ['video_link'];?>" class="popup-video" data-effect="mfp-move-from-top vertical-middle">
						 <img src="<?php echo $video['video_bg_image'];?>" class="img-fluid" alt="">
						 <h5 class="note"><span><?php echo $video['note'];?></span> <?php echo $video['runtime'];?></h5>
					 </a>
				 </div>
			 </div>
		 </div>
	 </div>
 </section><!-- /video-overview -->

 <section class="highlights">
	 <div class="container">
		 <div class="row">
			 <div class="col-12">
				 <div class="entry-title text-center">
					 <h2 class="title">Highlights</h2>
				 </div>
			 </div>
		 </div>

		 <div class="row">
			 <div class="col-md-4 col-sm-6">
				 <div class="icon-box text-center">
					 <div class="icon">
						 <img src="assets/images/svg/registration.svg" class="svg" alt="">
					 </div>

					 <div class="text">
						 <h4 class="title">Easy Registration</h4>
						 <p>Create an user profile, select the bank account to pay from, enter the debt account to pay to, define your micropayment and cap amount.</p>
					 </div>
				 </div>
			 </div><!-- /icon-box -->

			 <div class="col-md-4 col-sm-6">
				 <div class="icon-box text-center">
					 <div class="icon">
						 <img src="assets/images/svg/secure.svg" class="svg" alt="">
					 </div>

					 <div class="text">
						 <h4 class="title">Secure Servers</h4>
						 <p>We use the same security as world renowned banks. 24/7 scans and 256-bit encryption level and more.</p>
					 </div>
				 </div>
			 </div><!-- /icon-box -->
			 
			 <div class="col-md-4 col-sm-6">
				 <div class="icon-box text-center">
					 <div class="icon">
						 <img src="assets/images/svg/clock.svg" class="svg" alt="">
					 </div>

					 <div class="text">
						 <h4 class="title">24x7x365 Access</h4>
						 <p>Access your plan anytime, anywhere. Log in & check your balance from your laptop, tablet or phone using the SPENDEBT app!</p>
					 </div>
				 </div>
			 </div><!-- /icon-box -->
		 </div>
	 </div>
 </section><!-- /highlights -->
 
 <section class="frequently-asked">
	 <div class="container">
		 <div class="row">
			 <div class="col-12">
				 <div class="content">
					 <div class="entry-title">
						 <h2 class="title">Frequently Asked Questions</h2>
					 </div>

					 <ul class="faqs list-unstyled">
						 <li>
							 <h5 class="question">Is there a monthly fee?</h5>
							 <div class="answer">
								 <p>Yes. We charge $1.99 for up to 25 transactions per month or $2.99 for unlimited transactions per month</p>
							 </div>
						 </li>
						 <li>
							 <h5 class="question">Can I adjust the micropayment?</h5>
							 <div class="answer">
								 <p>Yes. You can change the micropayment amount as often as you like.</p>
							 </div>
						 </li>
						 <li>
							 <h5 class="question">Can I adjust the monthly cap amount?</h5>
							 <div class="answer">
								 <p>Yes. You can change the cap amount as often as you like</p>
							 </div>
						 </li>
						 <li>
							 <h5 class="question">Can I still use SpenDebt if my bank account is not listed?</h5>
							 <div class="answer">
								 <p>No. If you don’t see your bank account available, please tell us (by sending an email to info@spendebt.com) so we can be inclusive of your financial institution.</p>
							 </div>
						 </li>
						 <li>
							 <h5 class="question">Can I link multiple bank accounts?</h5>
							 <div class="answer">
								 <p>No. At this time SpenDebt does not offer the feature but will have this available in the future.</p>
							 </div>
						 </li>
					 </ul>

					 <a href="#" class="btn btn-base">Show All Frequently Asked Questions</a>
				 </div>
			 </div>
		 </div>
	 </div>
 </section><!-- /frequently-asked -->

 <section class="pricing">
	 <div class="container">
		 <div class="row">
			 <div class="col-12">
				 <div class="content">
					 <div class="entry-title text-center">
						 <h2 class="title">Join Our Unlimited Plan</h2>
						 <h4 class="font-weight-normal">Get 1 month <b>Free</b>, then:</h4>
					 </div>

					 <span class="price">$4.99</span>

					 <ul class="features list-unstyled">
						 <li>Unlimited Transactions</li>
						 <li>Access Account on Any Device</li>
						 <li>Free 30-Day Trial</li>
						 <li>Paid Automatically from Linked Bank Account</li>
						 <li>No Hidden Fees</li>
						 <li>Guaranteed Secure and Private Bank Information</li>
						 <li>Cancel Anytime</li>
					 </ul>
				 </div>
			 </div>
		 </div>
	 </div>
 </section><!-- /pricing -->

</div><!-- /primary -->



<?php
 get_footer();
 ?>
