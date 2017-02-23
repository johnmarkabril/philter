<div class="padding-top">
	<div class="ibox-content padding-five bg-nav_log">
		<h3 class="no-margin nav-log-color" style="padding-left: 15px;">Editorial Staff</h3>
	</div>
</div>

<div class="padding-bottom">
	<div class="row">
		<?php
			if ( !empty($get_all_staff) ) {
				foreach ( $get_all_staff as $gas ) :
		?>
					<?php 
						if ( $gas->POSITION == "Editor in Chief" ) {
					?>
							<center class="padding-top">
								<div class="ibox-content no-border" style="width: 40%;">
									<a data-toggle="modal" data-target="#staffDescipt<?php echo $gas->NO; ?>">
										<center><img class="img-responsive img-circle" src="<?php echo base_url(); ?>public/img/<?php echo $gas->IMAGEURL; ?>" style="width: 120px;height: 120px;" /></center>
										<div class="text-center"">
											<?php
												if ( !empty($gas->MIDDLENAME) ) {
											?>
													<h4 class="no-margin-bottom"><?php echo $gas->FIRSTNAME." ".$gas->MIDDLENAME." ".$gas->LASTNAME; ?></h4>
											<?php
												} else {
											?>
													<h4 class="no-margin-bottom"><?php echo $gas->FIRSTNAME." ".$gas->LASTNAME; ?></h4>
											<?php
												}
											?>
											<small><?php echo $gas->POSITION; ?></small>
										</div>
									</a>
								</div>
							</center>
					<?php
						}
					?>
					<?php 
						if ( $gas->POSITION == "Associate Editor" ) {
					?>
							<center class="padding-top">
								<div class="ibox-content no-border" style="width: 40%;">
									<a data-toggle="modal" data-target="#staffDescipt<?php echo $gas->NO; ?>">
										<center><img class="img-responsive img-circle" src="<?php echo base_url(); ?>public/img/<?php echo $gas->IMAGEURL; ?>" style="width: 120px;height: 120px;" /></center>
										<div class="text-center"">
											<?php
												if ( !empty($gas->MIDDLENAME) ) {
											?>
													<h4 class="no-margin-bottom"><?php echo $gas->FIRSTNAME." ".$gas->MIDDLENAME." ".$gas->LASTNAME; ?></h4>
											<?php
												} else {
											?>
													<h4 class="no-margin-bottom"><?php echo $gas->FIRSTNAME." ".$gas->LASTNAME; ?></h4>
											<?php
												}
											?>
											<small><?php echo $gas->POSITION; ?></small>
										</div>
									</a>
								</div>
							</center>
					<?php
						}
					?>
					<?php 
						if ( $gas->POSITION == "News Editor" || $gas->POSITION == "Copy Reader" || $gas->POSITION == "Feature Editor" ) {
					?>
							<center class="">
								<div class="col-md-4 padding-top">
									<div class="ibox-content no-border">
										<a data-toggle="modal" data-target="#staffDescipt<?php echo $gas->NO; ?>">
											<center><img class="img-responsive img-circle" src="<?php echo base_url(); ?>public/img/<?php echo $gas->IMAGEURL; ?>" style="width: 120px;height: 120px;" /></center>
											<div class="text-center"">
												<?php
													if ( !empty($gas->MIDDLENAME) ) {
												?>
														<h4 class="no-margin-bottom"><?php echo $gas->FIRSTNAME." ".$gas->MIDDLENAME." ".$gas->LASTNAME; ?></h4>
												<?php
													} else {
												?>
														<h4 class="no-margin-bottom"><?php echo $gas->FIRSTNAME." ".$gas->LASTNAME; ?></h4>
												<?php
													}
												?>
												<small><?php echo $gas->POSITION; ?></small>
											</div>
										</a>
									</div>
								</div>
							</center>
					<?php
						}
					?>

					<?php 
						if ( $gas->POSITION == "Photo Journalist" || $gas->POSITION == "Administrator" ) {
					?>
							<center class="">
								<div class="col-md-6 padding-top">
									<div class="ibox-content no-border">
										<a data-toggle="modal" data-target="#staffDescipt<?php echo $gas->NO; ?>">
											<center><img class="img-responsive img-circle" src="<?php echo base_url(); ?>public/img/<?php echo $gas->IMAGEURL; ?>" style="width: 120px;height: 120px;" /></center>
											<div class="text-center"">
												<?php
													if ( !empty($gas->MIDDLENAME) ) {
												?>
														<h4 class="no-margin-bottom"><?php echo $gas->FIRSTNAME." ".$gas->MIDDLENAME." ".$gas->LASTNAME; ?></h4>
												<?php
													} else {
												?>
														<h4 class="no-margin-bottom"><?php echo $gas->FIRSTNAME." ".$gas->LASTNAME; ?></h4>
												<?php
													}
												?>
												<small><?php echo $gas->POSITION; ?></small>
											</div>
										</a>
									</div>
								</div>
							</center>
					<?php
						}
					?>
		<?php
				endforeach;
			}
		?>
	</div>
</div>

<?php
	foreach ( $get_all_staff as $gas ) :
?>
		<div class="modal fade" id="staffDescipt<?php echo $gas->NO; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-sm" role="document">
			  	<div class="modal-content">
			     	<div class="modal-body padding-all">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			        	<center>
			        		<img class="img-responsive img-circle" src="<?php echo base_url(); ?>public/img/<?php echo $gas->IMAGEURL; ?>" style="width: 120px;height: 120px;" />
							<div class="text-center"">
								<?php
									if ( !empty($gas->MIDDLENAME) ) {
								?>
										<h4 class="no-margin-bottom"><?php echo $gas->FIRSTNAME." ".$gas->MIDDLENAME." ".$gas->LASTNAME; ?></h4>
								<?php
									} else {
								?>
										<h4 class="no-margin-bottom"><?php echo $gas->FIRSTNAME." ".$gas->LASTNAME; ?></h4>
								<?php
									}
								?>
								<small><?php echo $gas->POSITION; ?></small>
							</div>
							<hr/>
							<?php
								if ( !empty($gas->DESCRIPTION) ) {
									echo $gas->DESCRIPTION;
								} else {
							?>
								<center>No Description!</center>
							<?php
								}
							?>
			        	</center>
			      	</div>
			    </div>
			</div>
		</div>
<?php
	endforeach;
?>