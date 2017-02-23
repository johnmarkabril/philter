<!-- <div class="padding-top">
asd
</div> -->
<div class="padding-top">
	<div class="ibox-content padding-five bg-nav_log">
		<h3 class="no-margin nav-log-color" style="padding-left: 15px;">Latest Stories</h3>
	</div>
</div>

<div class="row">
	<?php
		if ( !empty($get_latest_blog_three) ) {
			foreach ( $get_latest_blog_three as $gsn ) :
	?>
		<div class="col-md-4 padding-top">
			<a href="<?php echo base_url(); ?>blog/post/<?php echo $gsn->NO;?>">
				<div class="ibox-content no-border" style="height:130px;">
					<label><a href="<?php echo base_url(); ?>blog/post/<?php echo $gsn->NO;?>"><?php echo $gsn->TITLE; ?></a></label>
					<div><small><?php echo $gsn->DATE." ".$gsn->HOUR; ?></small></div>
				</div>
			</a>
		</div>
	<?php
			endforeach;
		} else {
	?>
			<div class="text-center padding-top">
				<h3><label>No latest news!</label></h3>
			</div>
	<?php
		}
	?>
</div>