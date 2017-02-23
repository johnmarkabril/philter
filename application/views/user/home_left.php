<!-- <?php 
	// $this->load->view('user/home_latest_stories'); 
	// $this->load->view('user/home_videos');  
	// $this->load->view('user/home_category');  
?> -->

<!-- FEATURE -->
<div class="padding-top">
	<div class="ibox-content padding-five bg-nav_log">
		<a href="<?php echo base_url(); ?>feature"><h3 class="no-margin nav-log-color" style="padding-left: 15px;">Feature</h3></a>
	</div>
</div>
<div class="padding-top padding-left-right">
	<?php
		if ( !empty($get_latest_feature) ) {
			foreach ( $get_latest_feature as $glf ) :
	?>
				<h3 class="text-bold" style="margin-top: 0px;"><?php echo $glf->TITLE; ?></h3>
				<div><?php echo $glf->DATE; ?> | <?php echo $glf->NAME; ?></div>
				<div class="padding-top">
					<?php
						echo substr($glf->DESCRIPTION, 0, 250)."....";
					?>
				</div>
				<div class="padding-top">
					<a href="<?php echo base_url(); ?>feature/post/<?php echo $glf->NO; ?>" class="btn btn-info "><h4 class="no-margin padding-left-right">Read More</h4></a>
				</div>
	<?php
			endforeach;
		}
	?>
</div>
<!-- END OF FEATURE -->

<!-- EDITORIAL -->
<div class="padding-top">
	<div class="ibox-content padding-five bg-nav_log">
		<a href="<?php echo base_url(); ?>editorial"><h3 class="no-margin nav-log-color" style="padding-left: 15px;">Editorial</h3></a>
	</div>
</div>
<div class="padding-top padding-left-right">
	<?php
		if ( !empty($get_latest_editorial) ) {
			foreach ( $get_latest_editorial as $gle ) :
	?>
				<h3 class="text-bold" style="margin-top: 0px;"><?php echo $gle->TITLE; ?></h3>
				<div><?php echo $gle->DATE; ?> | <?php echo $gle->AUTHOR; ?></div>
				<div class="padding-top">
					<div class="row">
						<div class="col-md-4">
							<?php
								echo substr($gle->DESCRIPTION, 0, 250)."....";
							?>
						</div>
						<div class="col-md-8">
							<img src="<?php echo base_url(); ?>public/img/<?php echo $gle->IMAGEURL; ?>" class="full-width" style="height: 200px;" />
						</div>
					</div>
				</div>
				<div class="padding-top">
					<a href="<?php echo base_url(); ?>editorial/post/<?php echo $gle->NO; ?>" class="btn btn-info "><h4 class="no-margin padding-left-right">Read More</h4></a>
				</div>
	<?php
			endforeach;
		}
	?>
</div>
<!-- END OF EDITORIAL -->

<!-- ENTERTAINMENT -->
<div class="padding-top">
	<div class="ibox-content padding-five bg-nav_log">
		<a href="<?php echo base_url(); ?>entertainment"><h3 class="no-margin nav-log-color" style="padding-left: 15px;">Entertainment</h3></a>
	</div>
</div>
<div class="padding-top padding-left-right">
	<?php
		if ( !empty($get_two_latest_entertainment) ) {
			$x = 0;
			foreach ( $get_two_latest_entertainment as $gtle ) :
				if ( $x == 0 ) { 
					$x++;
	?>
					<h3 class="text-bold" style="margin-top: 0px;"><?php echo $gtle->TITLE; ?></h3>
					<div><?php echo $gtle->DATE; ?> | <?php echo $gtle->NAME; ?></div>
					<div class="padding-top">
						<div class="row">
							<div class="col-md-6">
								<img src="<?php echo base_url(); ?>public/img/<?php echo $gle->IMAGEURL; ?>" class="full-width" style="height: 200px;" />
							</div>
							<div class="col-md-6">
								<?php
									echo substr($gtle->DESCRIPTION, 0, 250)."....";
								?>
							<div class="padding-top">
								<a href="<?php echo base_url(); ?>entertainment/post/<?php echo $gtle->NO; ?>" class="btn btn-info "><h4 class="no-margin padding-left-right">Read More</h4></a>
							</div>
							</div>
						</div>
					</div>
	<?php
				} else {
	?>

					<div class="padding-top">
						<h3 class="text-bold" style="margin-top: 0px;"><?php echo $gtle->TITLE; ?></h3>
						<div><?php echo $gtle->DATE; ?> | <?php echo $gtle->NAME; ?></div>
						<div class="padding-top">
							<?php
								echo substr($gtle->DESCRIPTION, 0, 250)."....";
							?>
						</div>
						<div class="padding-top">
							<a href="<?php echo base_url(); ?>entertainment/post/<?php echo $gtle->NO; ?>" class="btn btn-info "><h4 class="no-margin padding-left-right">Read More</h4></a>
						</div>
					</div>
	<?php
				}
			endforeach;
		}
	?>
</div>
<!-- END OF ENTERTAINMENT -->

