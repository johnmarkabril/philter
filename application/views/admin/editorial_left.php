<div class="padding-top">
	<div class="ibox no-margin">
		<div class="ibox-title no-border text-bold">Editorial list</div>
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
                		if ( !empty($get_all_editorial) ) {
                			foreach ( $get_all_editorial as $gae ) :
                	?>
			                	<tr>
			                		<td><a href="<?php echo base_url(); ?>admin/editorial/post/<?php echo $gae->NO; ?>"><?php echo $gae->TITLE; ?></a></td>
			                		<td>
			                			<a href="<?php echo base_url(); ?>admin/editorial/delete/<?php echo $gae->NO; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
			                		</td>
			                	</tr>
			        <?php
			        		endforeach;
			        	} else{
			        ?>
							<tr>
			                	<td>No Editorial!</td>
			                </tr>
			        <?php
			        	}
			        ?>
                </tbody>
            </table>
		</div>
	</div>	
</div>