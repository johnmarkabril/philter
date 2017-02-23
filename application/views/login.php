<div class="modal inmodal" id="loginModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content animated bounceInRight">
            <?php
                if( !$this->session->userdata('user_session') ){
                    echo form_open('Login');
            ?>
                        <div class="modal-header">
                            <!-- <img class="img-responsive full-width" src="<?php echo base_url();?>public/img/logo4.png" /> -->
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                            <div class="padding-top">
                            <h4 class="modal-title">Login here</h4>
                            <small>Please fill-up the fields below.</small>
                            </div>
                        </div>
                        <div class="modal-body padding-all">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="text" class="form-control" name="login_email" id="login-email" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="login_password" id="login-password" />
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary full-width" value="Login"/>
                                <div class="row padding-top">
                                    <div class="col-md-12">
                                        <div class="text-center">
                                            <small class="text-center"><a href="<?php echo base_url(); ?>signup">Create an Account?</a></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
            <?php
                }
            ?>
        </div>
    </div>
</div>
