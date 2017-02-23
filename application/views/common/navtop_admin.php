<div class="panel panel-default no-border no-border-radius full-width no-margin">
  	<div class="panel-body" style="background-color: #000000;padding-top: 5px; padding-bottom: 5px;">
    	<div class="container">
    		<div class="pull-right" id="nav_log_hover">
                <h6 class="no-margin">
                    <span>
                        <a href="" class="nav-log-color">
                            <b><?php echo $this->session->userdata('user_session')->FIRSTNAME." ".$this->session->userdata('user_session')->LASTNAME; ?></b>
                        </a>
                    </span>
                    |
                    <span>
                        <a href="<?php echo base_url();?>logout" class="nav-log-color">
                            <b>Log-out</b>
                        </a>
                    </span>
                </h6>
    		</div>
    	</div>
  	</div>
</div>
<div class="panel panel-default no-border no-border-radius full-width no-margin">
  	<div class="panel-body bg-nav_log">
    	<div class="container">
    		<div class="text-center" id="nav_log_hover">
    			<a href="<?php echo base_url(); ?>" class="nav-log-color"><h2 class="no-margin"><b>PHILTER.COM</b></h2></a>
    		</div>
    	</div>
  	</div>
</div>
<div class="container">
	<div>
		<nav class="nav2 navbar navbar-default no-margin" style="background-color: #ffffff;background-color: rgba(0,0,0,0.0);font-size: 13px;">
			<div style="border-bottom: 1px solid">
				<div class="text-center">
				    <ul class="nav navbar-nav" style="display: inline-block;">
                        <li class="text-center">
                            <a href="<?php echo base_url(); ?>admin/staff" class="hvr-underline-reveal">About staffs</a>
                        </li>
				        <li class="text-center">
				            <a href="<?php echo base_url(); ?>admin/blog" class="hvr-underline-reveal">Blog</a>
				        </li>
				        <li class="text-center">
				            <a href="<?php echo base_url(); ?>admin/editorial" class="hvr-underline-reveal">Editorial</a>
				        </li>
                        <li class="text-center">
                            <a href="<?php echo base_url(); ?>admin/entertainment" class="hvr-underline-reveal">Entertainment</a>
                        </li>
                        <li class="text-center">
                            <a href="<?php echo base_url(); ?>admin/feature" class="hvr-underline-reveal">Feature</a>
                        </li>
                        <li class="text-center">
                            <a href="<?php echo base_url(); ?>admin/news" class="hvr-underline-reveal">News</a>
                        </li>
                        <li class="text-center">
                            <a href="<?php echo base_url(); ?>admin/videos" class="hvr-underline-reveal">Videos</a>
                        </li>
				        <li class="text-center">
				            <a href="<?php echo base_url(); ?>admin/user_management" class="hvr-underline-reveal">User Management</a>
				        </li>
				    </ul>
				</div>
			</div>
		</nav>
	</div>
</div>