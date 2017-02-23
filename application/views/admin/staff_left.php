<div class="padding-top">
	<input type="button" data-toggle="modal" data-target="#createNewStaff"  class="btn btn-success full-width" value="Add New Staff" />
</div>

<div class="modal inmodal" id="createNewStaff" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated bounceInDown">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h3 class="no-margin">Create New Staff</h3>
            </div>
            <div class="modal-body padding-all">
            	<form method="POST" enctype="multipart/form-data" action="<?php echo base_url(); ?>admin/staff/insertStaff">
            		<div class="form-group">
			            <label>Image</label>
			     		<input type="file" name="image" class="file hide" required />
	                    <div class="input-group col-xs-12">
	                        <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
	                        <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
	                        <span class="input-group-btn">
	                            <button class="browse btn btn-info input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
	                        </span>
	                    </div>
			        </div>
	                <div class="form-group">
	                	<div class="row">
	                		<div class="col-md-5">
			                    <label>First name</label>
			                    <input type="text" class="form-control" name="fname" required />
	                		</div>
	                		<div class="col-md-2">
			                    <label>Middle I.</label>
			                    <input type="text" class="form-control" name="mini" required />
	                		</div>
	                		<div class="col-md-5">
			                    <label>Last name</label>
			                    <input type="text" class="form-control" name="lname" required />
	                		</div>
	                	</div>
	                </div>
	                <div class="form-group">
						<label>Description</label>
			            <textarea class="form-control" name="description" style="min-height: 20%;max-width: 100%;max-height: 20%;"></textarea>
	                </div>
	                <div class="form-group">
						<label>Position</label>
			            <input type="text" class="form-control" name="position" required />
	                </div>
	                <div class="form-group">
			            <input type="submit" class="btn btn-success full-width" name="submit" value="Submit" />
	                </div>
               	</form>
           </div>
        </div>
    </div>
</div>
