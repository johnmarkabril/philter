<div class="padding-top">
	<div class="ibox-content padding-five bg-nav_log">
		<h3 class="no-margin nav-log-color" style="padding-left: 15px;">Editorial</h3>
	</div>
</div>

<?php
	foreach ( $get_specific_editorial as $gse ) :
?>
		<div class="padding-top">
			<div class="ibox-content no-border">
				<div class="text-center">
					<h3 class="no-margin">
						<?php echo $gse->TITLE; ?>
					</h3>
					<div class="content-editorial"><?php echo $gse->DATE; ?></div>
				</div>
				<div>
					<?php 
						$desc = explode("/n", $gse->DESCRIPTION); 
						foreach ( $desc as $description ) :
					?>
							<div class="padding-top">
								<?php echo $description; ?>
							</div>
					<?php
						endforeach;
					?>
				</div>
			</div>
		</div>
<?php 
	endforeach;
?>