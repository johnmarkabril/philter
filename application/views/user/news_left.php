<div class="padding-top">
	<div class="ibox-content padding-five bg-nav_log">
		<h3 class="no-margin nav-log-color" style="padding-left: 15px;">News</h3>
	</div>
</div>

<div class="row">
	<?php 
		if ( !empty($get_all_news) ) {
			foreach ( $get_all_news as $gan ) :
	?>
				<div class="col-md-4">
					<div class="padding-top">
						<a href="<?php echo $gan->URL; ?>">
							<div class="ibox-content product-box">
								<img class="img-responsive" src="<?php echo base_url(); ?>public/img/<?php echo $gan->IMAGEURL;?>"/> 
							   	<div class="product-desc padding-all">
							   		<label class="text-center color-sdfgsdf">
							   			<a href="<?php echo $gan->URL; ?>"><?php echo $gan->TITLE; ?></a>
							   		</label>
							   	</div>
							</div>
						</a>
					</div>
				</div>
	<?php
			endforeach;
		}
	?>
</div>