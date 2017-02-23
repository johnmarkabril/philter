<div class="padding-top">
	<div class="ibox-content padding-five bg-nav_log">
		<h3 class="no-margin nav-log-color" style="padding-left: 15px;">Videos</h3>
	</div>
</div>

<div class="row">
<?php
	$x = 1; 
	if ( !empty($get_all_news_videos_limit) ) {
		foreach( $get_all_news_videos_limit as $galnvl ) :
			if ( $x == 1 ) {
				$x++;
?>
				<div class="padding-top">
					<div class="col-md-12">
						<div class="ibox-content product-box">
							<div class="product-imitation no-padding">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe src="<?php echo $galnvl->VIDEOURL; ?>"></iframe>
								</div>
							</div>
							<div class="product-desc padding-all" style="height: 60px;">
							   	<label class="text-center color-sdfgsdf">
									<a href="<?php echo base_url(); ?>videos/post/<?php echo $galnvl->NO; ?>"><?php echo $galnvl->TITLE; ?></a>
							   	</label>
							</div>
						</div>
					</div>
				</div>
		<?php
			} else {
		?>
				<div class="col-md-6 padding-top">
					<div class="ibox-content product-box">
						<div class="product-imitation no-padding">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe src="<?php echo $galnvl->VIDEOURL; ?>"></iframe>
							</div>
						</div>
						<div class="product-desc padding-all" style="height: 60px;">
						   	<label class="text-center color-sdfgsdf">
								<a href="<?php echo base_url(); ?>videos/post/<?php echo $galnvl->NO; ?>"><?php echo $galnvl->TITLE; ?></a>
						   	</label>
						</div>
					</div>
				</div>
<?php
			}
		endforeach;
	}
?>
</div>