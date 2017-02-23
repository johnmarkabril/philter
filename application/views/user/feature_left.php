<div class="padding-top">
	<div class="ibox-content padding-five bg-nav_log">
		<h3 class="no-margin nav-log-color" style="padding-left: 15px;">Feature</h3>
	</div>
</div>

<?php
	$x = "";
	if ( !empty($get_all_feature) ) {
		foreach ( $get_all_feature as $gaf ) :
			if ( empty($x) ) {
				$x++;
?>
				<div class="padding-top">
					<a href="<?php echo base_url(); ?>feature/post/<?php echo $gaf->NO;?>">
						<div class="ibox-content no-border">
							<h3 class="no-margin text-center text-bold"><?php echo $gaf->TITLE; ?></h3>
							<center><small class="text-center"><?php echo $gaf->DATE; ?></small></center>
							<div class="padding-top">
								<?php 
									echo substr($gaf->DESCRIPTION, 0,250);
								?>
							</div>
						</div>
					</a>
				</div>
<?php
			} else {
?>
				<div class="padding-top">
					<a href="<?php echo base_url(); ?>feature/post/<?php echo $gaf->NO;?>">
						<div class="row">
							<div class="col-md-4">
								<div class="ibox-content no-border">
									<h3 class="no-margin text-center text-bold"><?php echo $gaf->TITLE; ?></h3>
									<center><small class="text-center"><?php echo $gaf->DATE; ?></small></center>
									<div class="padding-top">
										
								<?php 
									echo substr($gaf->DESCRIPTION, 0,150);
								?>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
<?php
			}
		endforeach;
	}
?>