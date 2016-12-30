<!-- <div class="padding-top">
asd
</div> -->
<div class="padding-top">
	<div class="ibox-content padding-five bg-nav_log">
		<h3 class="no-margin nav-log-color" style="padding-left: 15px;">Latest Stories</h3>
	</div>
</div>

<div class="padding-top">
	<input type="text" class="form-control full-width" placeholder="Search stories ...." />
</div>
<div class="row">
	<?php
		if ( !empty($get_stories_new) ) {
			foreach ( $get_stories_new as $gsn ) :
	?>
		<div class="col-md-4 padding-top">
			<div class="ibox-content" style="height:130px;">
				<label><?php echo $gsn->TITLE; ?></label>
				<small><?php echo $gsn->DATE." ".$gsn->HOUR; ?></small>
			</div>
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