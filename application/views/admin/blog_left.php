<div class="padding-top">
	<div class="ibox no-margin">
		<div class="ibox-title no-border text-bold">Blog list</div>
		<div class="ibox-content">
			<input type="text" class="form-control" placeholder="Search" />
			<table class="table table-hover text-center no-margin">
                <thead>
                    <tr>
                        <td class="text-center">Title</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                	<?php
                		if ( !empty($get_all_blog) ) {
                			foreach ( $get_all_blog as $gab ) :
                	?>
			                	<tr>
			                		<td><a href="<?php echo base_url(); ?>admin/blog/post/<?php echo $gab->NO; ?>"><?php echo $gab->TITLE; ?></a></td>
			                		<td>
			                			<a href="<?php echo base_url(); ?>admin/blog/delete/<?php echo $gab->NO; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
			                		</td>
			                	</tr>
			        <?php
			        		endforeach;
			        	} else{
			        ?>
							<tr>
			                	<td>No blog!</td>
			                </tr>
			        <?php
			        	}
			        ?>
                </tbody>
            </table>
		</div>
	</div>	
</div>