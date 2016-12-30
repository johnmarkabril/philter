<div class="row">

	<div class="col-md-4" style="min-height: 480px;">
		<div class="padding-top">
			<div class="ibox-content padding-five bg-nav_log">
				<h3 class="no-margin nav-log-color" style="padding-left: 15px;">Business</h3>
			</div>
		</div>
		<div class="padding-top">
			<img class="img-responsive full-width" src="<?php echo base_url();?>public/img/4.jpg" />
		</div>
		<?php 
			if (  !empty($get_news_business) ) {
				foreach ( $get_news_business as $gnb ) :
		?>
					<div class="padding-top">
						<h4>Latest</h4>
						<label>
							<a><?php echo $gnb->TITLE; ?></a>
						</label>
						<small><?php echo $gnb->DATE; ?></small>
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

	<div class="col-md-4" style="min-height: 480px;">
		<div class="padding-top">
			<div class="ibox-content padding-five bg-nav_log">
				<h3 class="no-margin nav-log-color" style="padding-left: 15px;">Entertainment</h3>
			</div>
		</div>
		<div class="padding-top">
			<img class="img-responsive full-width" src="<?php echo base_url();?>public/img/4.jpg" />
		</div>
		<?php 
			if (  !empty($get_news_entertainment) ) {
				foreach ( $get_news_entertainment as $gnb ) :
		?>
					<div class="padding-top">
						<h4>Latest</h4>
						<label>
							<a><?php echo $gnb->TITLE; ?></a>
						</label>
						<small><?php echo $gnb->DATE; ?></small>
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

	<div class="col-md-4" style="min-height: 480px;">
		<div class="padding-top">
			<div class="ibox-content padding-five bg-nav_log">
				<h3 class="no-margin nav-log-color" style="padding-left: 15px;">Global Nation</h3>
			</div>
		</div>
		<div class="padding-top">
			<img class="img-responsive full-width" src="<?php echo base_url();?>public/img/4.jpg" />
		</div>
		<?php 
			if (  !empty($get_news_globalnation) ) {
				foreach ( $get_news_globalnation as $gnb ) :
		?>
					<div class="padding-top">
						<h4>Latest</h4>
						<label>
							<a><?php echo $gnb->TITLE; ?></a>
						</label>
						<small><?php echo $gnb->DATE; ?></small>
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

	<div class="col-md-4" style="min-height: 480px;">
		<div class="padding-top">
			<div class="ibox-content padding-five bg-nav_log">
				<h3 class="no-margin nav-log-color" style="padding-left: 15px;">Lifestyle</h3>
			</div>
		</div>
		<div class="padding-top">
			<img class="img-responsive full-width" src="<?php echo base_url();?>public/img/4.jpg" />
		</div>
		<?php 
			if (  !empty($get_news_lifestyle) ) {
				foreach ( $get_news_lifestyle as $gnb ) :
		?>
					<div class="padding-top">
						<h4>Latest</h4>
						<label>
							<a><?php echo $gnb->TITLE; ?></a>
						</label>
						<small><?php echo $gnb->DATE; ?></small>
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

	<div class="col-md-4" style="min-height: 480px;">
		<div class="padding-top">
			<div class="ibox-content padding-five bg-nav_log">
				<h3 class="no-margin nav-log-color" style="padding-left: 15px;">News</h3>
			</div>
		</div>
		<div class="padding-top">
			<img class="img-responsive full-width" src="<?php echo base_url();?>public/img/4.jpg" />
		</div>
		<?php 
			if (  !empty($get_news_news) ) {
				foreach ( $get_news_news as $gnb ) :
		?>
					<div class="padding-top">
						<h4>Latest</h4>
						<label>
							<a><?php echo $gnb->TITLE; ?></a>
						</label>
						<small><?php echo $gnb->DATE; ?></small>
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

	<div class="col-md-4" style="min-height: 480px;">
		<div class="padding-top">
			<div class="ibox-content padding-five bg-nav_log">
				<h3 class="no-margin nav-log-color" style="padding-left: 15px;">Opinion</h3>
			</div>
		</div>
		<div class="padding-top">
			<img class="img-responsive full-width" src="<?php echo base_url();?>public/img/4.jpg" />
		</div>
		<?php 
			if (  !empty($get_news_opinion) ) {
				foreach ( $get_news_opinion as $gnb ) :
		?>
					<div class="padding-top">
						<h4>Latest</h4>
						<label>
							<a><?php echo $gnb->TITLE; ?></a>
						</label>
						<small><?php echo $gnb->DATE; ?></small>
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

	<div class="col-md-4" style="min-height: 480px;">
		<div class="padding-top">
			<div class="ibox-content padding-five bg-nav_log">
				<h3 class="no-margin nav-log-color" style="padding-left: 15px;">Sports</h3>
			</div>
		</div>
		<div class="padding-top">
			<img class="img-responsive full-width" src="<?php echo base_url();?>public/img/4.jpg" />
		</div>
		<?php 
			if (  !empty($get_news_sports) ) {
				foreach ( $get_news_sports as $gnb ) :
		?>
					<div class="padding-top">
						<h4>Latest</h4>
						<label>
							<a><?php echo $gnb->TITLE; ?></a>
						</label>
						<small><?php echo $gnb->DATE; ?></small>
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

	<div class="col-md-4" style="min-height: 480px;">
		<div class="padding-top">
			<div class="ibox-content padding-five bg-nav_log">
				<h3 class="no-margin nav-log-color" style="padding-left: 15px;">Technology</h3>
			</div>
		</div>
		<div class="padding-top">
			<img class="img-responsive full-width" src="<?php echo base_url();?>public/img/4.jpg" />
		</div>
		<?php 
			if (  !empty($get_news_technology) ) {
				foreach ( $get_news_technology as $gnb ) :
		?>
					<div class="padding-top">
						<h4>Latest</h4>
						<label>
							<a><?php echo $gnb->TITLE; ?></a>
						</label>
						<small><?php echo $gnb->DATE; ?></small>
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
		?>	</div>

</div>