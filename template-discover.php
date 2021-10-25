<?php

 /* Template Name: discover*/

 get_header();

 $banner = get_field('page_banner');
 $video = get_field('video_overview');
 $price_plan = get_field('price_plan');
 $group = get_field('price_plan');
 $repeaters = $group['price_list']; 
?>

<div class="header_gutter"></div>
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
					 <h2 class="title"><?php the_field('title');?></h2>
					 <h4 class="font-weight-normal"><?php the_field('sub_title');?></h4>
				 </div>	
			 </div>
		 </div>
	 </div>
	 <?php


if( have_rows('how_works') ):

    while( have_rows('how_works') ) : the_row();
     
        $icon = get_sub_field('chose_icon');
		$heading = get_sub_field('heading');
		$content = get_sub_field('content');
		$link = get_sub_field('link');
		$text = get_sub_field('text');
		$image = get_sub_field('image');		
?>

	 <div class="work-steps">
		 <div class="container">
			 <div class="row align-items-center">
				 <div class="col-sm-8">
					 <div class="content" data-number="001">
						 <div class="icon float-left">
							 <i class="icon-<?php echo $icon;?>"></i>
							 <span class="number">1</span>
						 </div>

						 <div class="text">
							 <h2 class="title"><?php echo $heading;?></h2>
							 <p><?php echo $content;?></p>
							 <a href="<?php echo $link;?>" class="btn"><?php echo $text;?></a>
						 </div>
					 </div>
				 </div>

				 <div class="col-sm-4">
					 <div class="media">
						 <img src="<?php echo $image;?>" class="img-fluid" alt="">
					 </div>
				 </div>
			 </div>
		 </div>
	 </div><!-- /work-steps -->

		<?php 
		endwhile;
	endif;
	?>
 </section><!-- /how-works -->

 <section class="video-overview" style="--background-image: url(assets/images/video-overview.jpg)">
	 <div class="container">
		 <div class="row align-items-center">
			 <div class="col-lg-5 col-md-5 col-sm-12">
				 <div class="entry-title">
					 <h2 class="title white"><?php echo $video['video_title'];?></h2>
					 <p><?php echo $video['video_content'];?></p>
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
					 <h2 class="title"><?php the_field('Highlights_title');?></h2>
				 </div>
			 </div>
		 </div>

		 <div class="row">

		 <?php

			if( have_rows('highlights') ):

				while( have_rows('highlights') ) : the_row();

					$img = get_sub_field('Registration_Image');
					$title = get_sub_field('registration_title');
					$content = get_sub_field('registration_content');
				 ?>
			 <div class="col-md-4 col-sm-6">
				 <div class="icon-box text-center">
					 <div class="icon">
						 <img src="<?php echo $img;?>" class="svg" alt="">
					 </div>
					 <div class="text">
						 <h4 class="title"><?php echo $title;?></h4>
						 <p><?php echo $content;?></p>
					 </div>
				 </div>
			 </div><!-- /icon-box -->

			  <?php
					endwhile;
				endif;
				?>
		 </div>
	 </div>
 </section><!-- /highlights -->
 
 <section class="frequently-asked">
	 <div class="container">
		 <div class="row">
			 <div class="col-12">
				 <div class="content">
					 <div class="entry-title">
						 <h2 class="title"><?php echo get_field('asked_title');?></h2>
					 </div>

					 <ul class="faqs list-unstyled">

					 <?php

							if( have_rows('frequently_asked') ):

								while( have_rows('frequently_asked') ) : the_row();

									$question = get_sub_field('question');
									$answer = get_sub_field('answer');

								?>
						 <li>
							 <h5 class="question"><?php echo $question;?></h5>
							 <div class="answer">
								 <p><?php echo $answer;?></p>
							 </div>
						 </li>

						 <?php
						 	endwhile;
						endif;
						 ?>
					 </ul>

					 <a href="<?php the_field('question_link');?>" class="btn btn-base"><?php the_field('question_text');?></a>
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
						<?php echo $price_plan['price_heading'];?>
					 </div>

					 <?php echo $price_plan['for_price'];?>

					 <ul class="features list-unstyled">
					 <?php foreach ($repeaters as $nrepeater):?>
						 <li><?php echo $nrepeater['list'];?></li>
						 <?php endforeach; ?>
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
