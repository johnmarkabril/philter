<div class="container">
	<div class="full-height">
		<div class="padding-top">
			<div class="ibox-content padding-five bg-nav_log">
				<h3 class="no-margin nav-log-color" style="padding-left: 15px;">Create an account?</h3>
			</div>
		</div>
		<div class="padding-top">
			<form action="<?php echo base_url(); ?>signup/insert" enctype="multipart/form-data" method="POST">
				<div class="row">
					<div class="col-md-5">
						<div class="form-group">
							<label>First name</label>
							<input type="text" class="form-control" name="fname" required />
						</div>	
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label>Middle initial</label>
							<input type="text" class="form-control" name="mini" required />
						</div>	
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<label>Last name</label>
							<input type="text" class="form-control" name="lname" required />
						</div>	
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Email Address</label>
							<input type="text" class="form-control" name="emailadd" required />
						</div>	
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="password" required />
						</div>	
					</div>	
					<div class="col-md-12">
						<div class="form-group">
							<label>Username</label>
							<input type="text" class="form-control" name="uname" required />
						</div>	
					</div>	
					<div class="col-md-12">
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
					</div>	
					<div class="col-md-12">
						<div class="form-group">
							<input type="submit" name="submit" class="btn btn-success btn-lg full-width" value="Submit" /> 
						</div>
					</div>	
				</div>
			</form>
		</div>
			<!-- <div class="form-group">
				<label>First name</label>
				<input type="text" class="form-control" />
			</div> -->
	</div>
</div>