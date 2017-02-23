<div class="row">
	<?php
		if ( !empty($get_all_staff) ) {
			foreach ( $get_all_staff as $gas ) :
	?>
				<div class="col-md-4">
					<div class="padding-top">
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
									<div class="row padding-top">
										<div class="col-md-6">
											<form method="POST" action="<?php echo base_url(); ?>admin/staff/delete_staff">
												<input type="text" value="<?php echo $gas->NO; ?>" name="del_no" style="display: none;"/>
												<input type="submit" class="btn btn-danger full-width" name="submit" value="Delete" />
											</form>
										</div>
										<div class="col-md-6">
											<input type="button" data-toggle="modal" data-target="#updateStaff<?php echo $gas->NO;?>" class="btn btn-primary full-width" value="Update" />
										</div>
									</div>	
								</div>
						</div>
					</div>				
				</div>
	<?php
			endforeach; 
		}
	?>
</div>

<?php
	foreach ( $get_all_staff as $gas ) :
?>
		<div class="modal inmodal" id="updateStaff<?php echo $gas->NO;?>" tabindex="-1" role="dialog"  aria-hidden="true">
		    <div class="modal-dialog">
		        <div class="modal-content animated bounceInDown">
		            <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		                <h3 class="no-margin">Update Staff</h3>
		            </div>
		            <div class="modal-body padding-all">
		            	<form method="POST" enctype="multipart/form-data" action="<?php echo base_url(); ?>admin/staff/update_staff">
		            		<div class="form-group">
					            <label>Image</label>
					     		<input type="file" name="image" class="file hide" />
			                    <div class="input-group col-xs-12">
			                        <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
			                        <input type="text" class="form-control input-lg" disabled placeholder="Upload Image" value="<?php echo $gas->IMAGEURL; ?>">
			                        <span class="input-group-btn">
			                            <button class="browse btn btn-info input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
			                        </span>
			                    </div>
					        </div>
			                <div class="form-group">
			                	<div class="row">
			                		<div class="col-md-5">
					                    <label>First name</label>
					                    <input type="text" class="form-control" name="fname" required value="<?php echo $gas->FIRSTNAME; ?>" />
			                		</div>
			                		<div class="col-md-2">
					                    <label>Middle I.</label>
					                    <input type="text" class="form-control" name="mini" required value="<?php echo $gas->MIDDLEINI; ?>" />
			                		</div>
			                		<div class="col-md-5">
					                    <label>Last name</label>
					                    <input type="text" class="form-control" name="lname" required value="<?php echo $gas->LASTNAME; ?>" />
			                		</div>
			                	</div>
			                </div>
			                <div class="form-group">
								<label>Description</label>
					            <textarea class="form-control" name="description" style="min-height: 20%;max-width: 100%;max-height: 20%;"><?php echo $gas->DESCRIPTION; ?></textarea>
			                </div>
			                <div class="form-group">
								<label>Position</label>
					            <input type="text" class="form-control" name="position" required value="<?php echo $gas->POSITION; ?>" />
			                </div>
			                <div class="form-group">
								<input type="text" value="<?php echo $gas->NO; ?>" name="del_no" style="display: none;"/>
					            <input type="submit" class="btn btn-success full-width" name="submit" value="Submit" />
			                </div>
		               	</form>
		           </div>
		        </div>
		    </div>
		</div>
<?php
	endforeach;
?>