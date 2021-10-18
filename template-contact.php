<?php

 /* Template Name: contact*/

 get_header();

 $contact = get_field('contact_page');
 $social= get_field('social_media','option');

 ?>

		<div class="header_gutter"></div>

		<section class="page-header d-flex align-items-center">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="entry-title">
							<?php the_field('entry_title');?>
						</div>
					</div>
				</div>
			</div>

			<div class="background rellax">
				<img src="<?php the_field('background_image');?>" class="img-fluid" alt="">
			</div>
		</section><!-- /page-header -->

		<div id="primary" class="content-area">

			<section class="contact-page">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-6 col-sm-12">
							<div class="content">
								<div class="entry-title">
									<h4 class="sub-title"><?php echo $contact['title'];?></h4>
									<h1 class="title"><?php echo $contact['sub_title'];?></h1>
								</div>
								<?php echo $contact['content'];?><a href="<?php echo $contact['spendebt_link']?>"><?php echo $contact['link_text']?></a>
								<h4 class="social-title"><?php echo $contact['social_title'];?></h4>
								<ul class="social-media social-color large list-inline">
								<?php 

									foreach($social as $nsocial):
										$name= $nsocial['select_social_media'];

									?>

										<li><a href="<?php echo $nsocial[$name];?>" class="icon-<?php echo $name;?>" target="_blank"></a></li>
									<?php 
									endforeach;
									?>
								</ul>
							</div>
						</div>

						<div class="col-md-6 col-sm-12">
							<div class="contact-form">
								<h5 class="title "><?php echo $contact['social_side_title'];?></h5>

								<div class="media">
									<img src="<?php echo $contact['media_image'];?>" class="img-fluid" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section><!-- /contact-page -->

			<div class="container">
				<div class="row">
					<div class="col">
						<hr>
					</div>
				</div>
			</div>

			<?php
				get_template_part("call-to-action");
			?>
			<!-- <section class="call-action">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="content coverbg" style="background-image: url(<?php echo $call ['cover_background'];?>);">
								<div class="entry-title">
									<h2 class="title white"><?php echo $call['title'];?></h2>
								</div>

								<a href="<?php echo $call['sing_up_link'];?>" class="btn btn-primary"><?php echo $call['sing_up_text'];?></a>
							</div>
						</div>
					</div>
				</div>
			</section>/call-action -->

		</div><!-- /primary -->

<?php get_footer();?>