<div class="padding-top">
	<div class="ibox no-margin">
		<div class="ibox-title no-border text-bold">Feature list</div>
		<div class="ibox-content">
			<input type="text" class="form-control" placeholder="Search" />
			<table class="table table-hover text-center no-margin">
                <thead>
                    <tr>
                        <th class="text-center">Title</th>
                    </tr>
                </thead>
                <tbody>
                	<?php
                		if ( !empty($get_all_feature) ) {
                			foreach ( $get_all_feature as $gab ) :
                	?>
			                	<tr>
			                		<td><a href="<?php echo base_url(); ?>admin/feature/post/<?php echo $gab->NO; ?>"><?php echo $gab->TITLE; ?></a></td>
			                		<td>
			                			<a href="<?php echo base_url(); ?>admin/feature/delete/<?php echo $gab->NO; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
			                		</td>
			                	</tr>
			        <?php
			        		endforeach;
			        	} else{
			        ?>
							<tr>
			                	<td>No feature!</td>
			                </tr>
			        <?php
			        	}
			        ?>
                </tbody>
            </table>
		</div>
	</div>	
</div>