<div class="padding-top">
	<div class="ibox-content padding-five bg-nav_log">
		<h3 class="no-margin nav-log-color" style="padding-left: 15px;">Blog</h3>
	</div>
</div>

<?php
	if ( !empty($get_all_blog) ) {
		foreach ( $get_all_blog as $gab ) :
?>
			<div class="padding-top">
				<div class="ibox-content no-border" style="background-color: rgba(255,255,255,0.8);">
					<div class="title">
						<a href="<?php echo base_url(); ?>blog/post/<?php echo $gab->NO; ?>"><?php echo $gab->TITLE; ?></a>
					</div>
					<div class="content-editorial">
						<?php echo $gab->DATE; ?>
					</div>
					<div class="content-editorial padding-top-five">
						<?php echo substr($gab->DESCRIPTION, 0,250)."... "; ?><a href="<?php echo base_url(); ?>blog/post/<?php echo $gab->NO; ?>">see more</a>
					</div>
				</div>
			</div>
<?php
		endforeach;
	} else {
?>
		<h2 class="padding-top text-center no-margin">No blog post.</h2>
<?php
	}
?>