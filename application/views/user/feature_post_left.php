<div class="padding-top">
	<div class="ibox-content padding-five bg-nav_log">
		<h3 class="no-margin nav-log-color" style="padding-left: 15px;padding-right: 15px;">Feature<span class="pull-right"><a href="<?php echo base_url(); ?>editorial" style="color: #FFFFFF;">Back</a></span></h3>
	</div>
</div>

<?php
	foreach ( $get_specific_feature as $gse ) :
?>
		<div class="padding-top">
			<div class="ibox-content no-border">
				<div class="text-center">
					<h1 class="no-margin text-bold">
						<?php echo $gse->TITLE; ?>
					</h1>
					<div class="content-editorial"><?php echo $gse->DATE; ?></div>
				</div>
				<?php 
					if ( !empty($gse->IMAGEURL) ) {
				?>
						<div class="padding-top-bottom">
							<img class="img-responsive full-width" src="<?php echo base_url();?>public/img/<?php echo $gse->IMAGEURL; ?>" />
						</div>
				<?php
					}
				?>
				<div>
					<?php 
						$desc = explode('\n', $gse->DESCRIPTION); 
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


<div class="padding-top">
	<div class="ibox-content no-border">

		<div class="form-group no-margin">
			<form method="POST" class="no-margin" action="<?php echo base_url(); ?>feature/insertcomment">
				<input type="text"  name="user_editorialno" value="<?php echo $this->uri->segment(3); ?>" style="display: none;" />

    			<?php 
    				if ( !empty($this->session->userdata('user_session')) ) {
    			?>
						<textarea class="form-control" name="user_editorialcomment" style="min-height: 5%;max-height: 50%;max-width: 100%;" required placeholder="Comment here!" ></textarea>
						<div class="row">
							<div class="col-md-12">
								<div class="padding-top pull-right">
									<input type="submit" class="btn btn-success" name="submit" value="Comment" />
								</div>
							</div>
						</div>
				<?php
					} else {
				?>
						<textarea class="form-control" name="user_editorialcomment" style="min-height: 5%;max-height: 50%;max-width: 100%;" disabled placeholder="Comment here!" ></textarea>
						<div class="row">
							<div class="col-md-12">
								<div class="padding-top pull-right">
									<input type="submit" class="btn btn-success" name="submit" value="Comment" disabled />
								</div>
							</div>
						</div>
				<?php
					}
				?>
			</form>
		</div>
		<?php
			if ( !empty($get_all_specific_comment) ) {
				foreach ( $get_all_specific_comment as $gasc ) :
		?>
					<div class="padding-top">
						<div class="panel panel-default no-border no-margin">
					        <div class="panel-body" style="background-color: #f5f4f6;">
					            <div class="row">
					                <div class="col-md-12">
						                <div class="col-sm-2">
					                        <div>
					                        	<img class="img-responsive full-width text-center" src="<?php echo base_url(); ?>public/img/<?php echo $gasc->IMAGEURL; ?>"/></div>
					                        <div class="text-center"><?php echo $gasc->NAME; ?></div>
						                </div>
						                <div class="col-md-10">
						                   	<div style="color: #FF4785;"><?php echo $gasc->DATE; ?></div>
						                   	<div class="justify-text"><?php echo $gasc->COMMENT; ?></div>
						                </div>
						            </div>
						        </div>
						    </div>
						</div>
					</div>	
		<?php
				endforeach;
			}
		?>	
	</div>
</div>