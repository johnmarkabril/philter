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
					<div class="col-md-4 padding-top">
						<a data-toggle="modal" data-target="#staffDescipt<?php echo $gas->NO; ?>">
							<div class="ibox-content no-border">
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
							</div>
						</a>
					</div>
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