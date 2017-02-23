<div class="padding-top">
	<div class="ibox no-margin">
		<div class="ibox-title no-border text-bold">
			<span><a data-toggle="modal" data-target="#blogCreate">Create</a></span> 
			<?php 
				if ( !empty($specificBlog) ) {
					foreach ( $specificBlog as $sb ) :
			?>
						<span class="pull-right"><a data-toggle="modal" data-target="#blog<?php echo $sb->NO;?>">Update</a></span>
			<?php
					endforeach;
				}
			?>
		</div>
		<div class="ibox-content">
			<?php
				if ( !empty($specificBlog) ) {
					foreach ( $specificBlog as $sb ) :
			?>
						<div class="padding-top">
							<h3 class="no-margin text-center text-bold"><?php echo $sb->TITLE; ?></h3>
						</div>
						<?php
							$desc = explode('\n', $sb->DESCRIPTION);
							foreach ( $desc as $description ) :
						?>
						<div class="padding-top">
							<?php echo $description; ?>
						</div>
			<?php
						endforeach;
					endforeach;
				}
			?>
		</div>
	</div>	
</div>
<?php 
 	foreach ( $specificBlog as $sb ) :
?>
	<div class="modal inmodal" id="blog<?php echo $sb->NO;?>" tabindex="-1" role="dialog"  aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content animated rotateInUpRight">
		        <div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		            <div class="padding-top">
		           		<h4 class="modal-title">Update a blog</h4>
		            </div>
		        </div>
		        <div class="modal-body padding-all">
		        	<form method="POST" enctype="multipart/form-data" action="<?php echo base_url(); ?>admin/blog/updateBlog">
			            <div class="form-group">
			                <label>Title</label>
			                <input type="text" class="form-control" name="admin_blogno" value="<?php echo $sb->NO; ?>" style="display: none;" />
			                <input type="text" class="form-control" name="admin_blogtitle" value="<?php echo $sb->TITLE; ?>" required />
			            </div>
			            <div class="form-group">
			                <label>Image</label>
			        		<input type="file" name="image" class="file hide" />
	                        <div class="input-group col-xs-12">
	                            <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
	                            <input type="text" class="form-control input-lg" disabled placeholder="Upload Image" value="<?php echo $sb->IMAGEURL; ?>">
	                            <span class="input-group-btn">
	                                <button class="browse btn btn-info input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
	                            </span>
	                        </div>
			            </div>
			            <div class="form-group">
			                <label>Description</label>
			                <textarea class="form-control" name="admin_blogdescription" style="min-height: 50%;max-height: 50%;max-width: 100%;" required ><?php echo $sb->DESCRIPTION; ?></textarea>
			            </div>
			            <div class="form-group">
			                <input type="submit" class="btn btn-primary full-width" name="submit" value="Submit" />
			            </div>
		            </form>
		        </div>
            
	        </div>
	    </div>
	</div>
<?php
	endforeach;
?>

	<div class="modal inmodal" id="blogCreate" tabindex="-1" role="dialog"  aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content animated rotateInUpRight">
		        <div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		            <div class="padding-top">
		           		<h4 class="modal-title">Create a blog</h4>
		            </div>
		        </div>
		        <div class="modal-body padding-all">
		        	<form method="POST" enctype="multipart/form-data" action="<?php echo base_url(); ?>admin/blog/createNewBlog">
			            <div class="form-group">
			                <label>Title</label>
			                <input type="text" class="form-control" name="admin_blogtitle" required />
			            </div>
			            <div class="form-group">
			                <label>Image</label>
			        		<input type="file" name="image" class="file hide" />
	                        <div class="input-group col-xs-12">
	                            <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
	                            <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
	                            <span class="input-group-btn">
	                                <button class="browse btn btn-info input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
	                            </span>
	                        </div>
			            </div>
			            <div class="form-group">
			                <label>Description</label>
			                <textarea class="form-control" name="admin_blogdescription" style="min-height: 50%;max-height: 50%;max-width: 100%;" required ></textarea>
			            </div>
			            <div class="form-group">
			                <input type="submit" class="btn btn-primary full-width" name="submit" value="Submit" />
			            </div>
		            </form>
		        </div>
            
	        </div>
	    </div>
	</div>