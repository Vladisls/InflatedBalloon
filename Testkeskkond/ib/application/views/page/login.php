<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade bs-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <br>
        <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#signin" data-toggle="tab">Sign In</a></li>
              <li class=""><a href="#signup" data-toggle="tab">Register</a></li>
            </ul>
        </div>



        <div class="tab-pane fade active in" id="signin">
            <form class="form-horizontal">
            <fieldset>
            <!-- Sign In Form -->

                  <h1>Please log in into your account</h1>
                  <?php echo validation_errors(); ?>
                  <?php echo form_open('verifylogin'); ?>
                  <label for="username">Username:</label>
                  <input type="text" size="20" id="username" name="username"/>
                  <br/>
                  <label for="password">Password:</label>
                  <input type="password" size="20" id="passowrd" name="password"/>
                  <br/>
                  <input type="submit" value="Login"/>
                  <?php echo form_close(); ?>

      
            </fieldset>
            </form>
        </div>
        <div class="tab-pane fade" id="signup">
            <form class="form-horizontal">
            <fieldset>
            <!-- Sign Up Form -->
            

                   <div id="content">
                    <div class="signup_wrap">
                    <div class="reg_form">

                    <div class="form_title">Registreeru</div>
                    <div class="form_sub_title">See on TASUTA</div>

 
                    <?php echo form_open("User/registration"); ?>
                    <p>
                    <label for="user_name">User Name:</label>
                    <input type="text" id="user_name" name="user_name" value="<?php echo set_value('user_name'); ?>" />
                    </p>
                    <p>
                    <label for="email_address">Your Email:</label>
                    <input type="text" id="email_address" name="email_address" value="<?php echo set_value('email_address'); ?>" />
                    </p>
                    <p>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" value="<?php echo set_value('password'); ?>" />
                    </p>
                    <p>
                    <label for="con_password">Confirm Password:</label>
                    <input type="password" id="con_password" name="con_password" value="<?php echo set_value('con_password'); ?>" />
                    </p>
                    <p>
                    <input type="submit" class="greenButton" value="Submit" />
                    </p>
                    <?php echo form_close(); ?>
                    </div><!--<div class="reg_form">-->
                  </div><!--<div id="content">-->



            </fieldset>
            </form>
      </div>
    </div>
      </div>
      <div class="modal-footer">
      <center>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </center>
      </div>
    </div>
  </div>
</div>