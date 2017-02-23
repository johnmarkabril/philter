<?php 

	// $this->load->view('user/home_latest_news');  

?>

<div class="padding-top">
	<div class="ibox-content padding-five bg-nav_log">
		<h3 class="no-margin nav-log-color" style="padding-left: 15px;">Popular Posts</h3>
	</div>
</div>
<div class="padding-top padding-left-right">
	<?php
		if ( !empty($get_latest_editorial) ) {
			foreach ( $get_latest_editorial as $gle ) :
	?>
				<h3 class="text-bold" style="margin-top: 0px;"><?php echo $gle->TITLE; ?></h3>
				<div><?php echo $gle->DATE; ?> | <?php echo $gle->AUTHOR; ?></div>
				<div class="padding-top">
					<?php
						echo substr($gle->DESCRIPTION, 0, 250)."....";
					?>
				</div>
				<div class="padding-top">
					<a href="<?php echo base_url(); ?>editorial/post/<?php echo $gle->NO; ?>" class="btn btn-info "><h4 class="no-margin padding-left-right">Read More</h4></a>
				</div>
	<?php
			endforeach;
		}
	?>
</div>


<div class="padding-top">
	<div class="ibox-content padding-five bg-nav_log">
		<h3 class="no-margin nav-log-color" style="padding-left: 15px;">Join our mailing list
			<div>
				Never miss an update
			</div>
		</h3>
	</div>
</div>
<div class="padding-top padding-left-right" >
	<input type="text" class="form-control" placeholder="Email Address" style="border:0px;background-color: rgba(243,243,244,0.0);border-bottom: 2px solid;"/>

	<div class="padding-top">
		<button type="submit" class="btn btn-info btn-lg full-width"><h3 class="no-margin padding-left-right">Subscribe</h3></button>
	</div>
</div>