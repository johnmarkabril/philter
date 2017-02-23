<div class="padding-top">
	<div class="ibox-content padding-five bg-nav_log">
		<h3 class="no-margin nav-log-color" style="padding-left: 15px;">Latest News</h3>
	</div>
</div>

<div style="height: 100%;">
	<?php 
		if ( !empty($get_latest_new) ) {
			foreach( $get_latest_new as $gln ) :
	?>

				<div class="padding-top">
					<a>
						<div class="ibox-content product-box">
							<!-- <div class="product-imitation no-padding">
								<img class="img-responsive full-width height-img-home" src="<?php echo base_url(); ?>public/img/<?php echo $gln->IMAGEURL; ?>" />
						    </div> -->
						   	<div class="product-desc padding-all">
						   		<label class="text-center color-sdfgsdf">
						   			<?php echo $gln->TITLE; ?>
						   		</label>
						   	</div>
						</div>
					</a>
				</div>

	<?php
			endforeach;
		}
	?>
</div>