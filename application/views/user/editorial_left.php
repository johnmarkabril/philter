<div class="padding-top">
	<div class="ibox-content padding-five bg-nav_log">
		<h3 class="no-margin nav-log-color" style="padding-left: 15px;">Editorial List</h3>
	</div>
</div>

<?php
	if ( !empty($get_all_editorial) ) {
		foreach ( $get_all_editorial as $gae ) :
?>
			<div class="padding-top">
				<div class="ibox-content no-border" style="background-color: rgba(255,255,255,0.8);">
					<div class="title">
						<a href="<?php echo base_url(); ?>editorial/post/<?php echo $gae->NO; ?>"><?php echo $gae->TITLE; ?></a>
					</div>
					<div class="content-editorial">
						December 1, 2016
					</div>
					<div class="content-editorial padding-top-five">
						<?php echo substr($gae->DESCRIPTION, 0,500)."... "; ?><a href="<?php echo base_url(); ?>editorial/post/<?php echo $gae->NO; ?>">see more</a>
					</div>
				</div>
			</div>
<?php
		endforeach;
	} else {
?>
		<h2 class="padding-top text-center no-margin">No editorial post.</h2>
<?php
	}
?>