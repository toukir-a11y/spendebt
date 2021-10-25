<?php
$call = get_field('call_to_action', 'option');
?>

<section class="call-action">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="content coverbg" style="background-image: url(<?php echo $call ['cover_background'];?>);">
								<div class="entry-title">
									<h2 class="title white"><?php echo $call['title'];?></h2>
								</div>

								<a href="<?php echo $call['sign_up_link'];?>" class="btn btn-primary"><?php echo $call['sing_up_text_'];?></a>
							</div>
						</div>
					</div>
				</div>
			</section><!-- /call-action -->
