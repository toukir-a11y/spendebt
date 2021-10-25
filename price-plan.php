
<?php 
$price = get_field('price_plan');
$group = get_field('price_plan');
$frepeaters = $group['features_list'];

?>

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