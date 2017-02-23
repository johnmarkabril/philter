<div class="padding-top">
	<div class="ibox-content no-border">
		<table class="table table-hover">
            <thead>
	            <tr>
	                <td><h5 class="no-margin">First name</h5></td>
	                <td><h5 class="no-margin">Last name</h5></td>
	                <td><h5 class="no-margin">Email address</h5></td>
	                <td><h5 class="no-margin">Username</h5></td>
	                <td><h5 class="no-margin text-center">Command</h5></td>
                </tr>
            </thead>
            <tbody>
            	<?php
            		if ( !empty($get_all_user) ) {
            			foreach ( $get_all_user as $gau ) :
            	?>
			                <tr>
			                	<td><?php echo $gau->FIRSTNAME; ?></td>
			                	<td><?php echo $gau->LASTNAME; ?></td>
			                	<td><?php echo $gau->EMAILADDRESS; ?></td>
			                	<td><?php echo $gau->USERNAME; ?></td>
			                	<td>
			                		<form method="POST" action="<?php echo base_url(); ?>admin/user_management/delete/<?php echo $gau->NO;?>">
			                			<input type="submit" value="Delete" name="submit" class="btn btn-danger btn-sm" />
			                		</form>
			                	</td>
			                </tr>
                <?php
                		endforeach;
                	}
                ?>
            </tbody>
        </table>
	</div>	
</div>