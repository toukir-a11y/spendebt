<section class="featured">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="content text-center">
								<div class="entry-title ">
									<h2 class="title white"><?php the_field('featured_title');?></h2>
								</div>

								<ul class="client-logos list-unstyled">
									
								<?php				
									if( have_rows('featured') ):

									while( have_rows('featured') ) : the_row();

									$image = get_sub_field('featured_image');
														
								?>

									<li><a><img src="<?php echo $image; ?>" class="img-fluid" alt=""></a></li>

								<?php
								endwhile;
							endif;
							?>
								</ul>

							</div>
						</div>
					</div>
				</div>
			</section><!-- /featured -->
