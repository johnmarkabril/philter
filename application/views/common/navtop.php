<div class="panel panel-default no-border no-border-radius full-width no-margin">
  	<div class="panel-body" style="background-color: #000000;padding-top: 5px; padding-bottom: 5px;">
    	<div class="container">
    		<div class="pull-right" id="nav_log_hover">
    			<?php 
    				if ( empty($this->session->userdata('user_session')) ) {
    			?>
                        <h6 class="no-margin">
                            <span>
                                <a href="https://www.facebook.com/Unofficial-PHILter-1655273131431713/?ref=bookmarks&__mref=message_bubble" class="nav-log-color">
                                    <b>Facebook</b>
                                </a>
                            </span>
                            |
                            <span>
                                <a href="https://twitter.com/philterofficial" class="nav-log-color">
                                    <b>Twitter</b>
                                </a>
                            </span>
                            |
                            <span>
                                <a data-toggle="modal" data-target="#loginModal" class="nav-log-color" class="nav-log-color">
                                    <b>My Account</b>
                                </a>
                            </span>
                        </h6>
    			<?php
    				} else {
    			?>

                	<h6 class="no-margin">
                        <span>
                            <a href="" class="nav-log-color">
                                <b><?php echo $this->session->userdata('user_session')->FIRSTNAME." ".$this->session->userdata('user_session')->LASTNAME; ?></b>
                            </a>
                        </span>
                        |
                        <span>
                            <a href="https://www.facebook.com/Unofficial-PHILter-1655273131431713/?ref=bookmarks&__mref=message_bubble" class="nav-log-color">
                                <b>Facebook</b>
                            </a>
                        </span>
                        |
                        <span>
                            <a href="" class="nav-log-color">
                                <b>Twitter</b>
                            </a>
                        </span>
                        |
	                    <span>
	                        <a href="<?php echo base_url();?>logout" class="nav-log-color">
	                            <b>Log-out</b>
	                        </a>
	                    </span>
	                </h6>
    			<?php
    				}
    			?>
    		</div>
    	</div>
  	</div>
</div>
<?php $this->load->view('login'); ?>