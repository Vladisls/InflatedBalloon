<div class="modal fade bs-modal-sm" id="myModal" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <br>

        <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#signin" data-toggle="tab">Sign In</a></li>
              <li class=""><a href="#signup" data-toggle="tab">Register</a></li>
              <li class=""><a href="#why" data-toggle="tab">Why?</a></li>
            </ul>
        </div>

      <div class="modal-body">
        <div id="myTabContent" class="tab-content">
          <div class="tab-pane fade in" id="why">
            <p>We need this information so that you can receive access to the site and its content. Rest assured your information will not be sold, traded, or given to anyone.</p>
          </div>
        </div>
        
        <div class="tab-pane fade active in" id="signin">
          
            	<h1>Simple Login with CodeIgniter</h1>
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
            
        </div>
        <div class="tab-pane fade" id="signup">
            
            <div id="content">
<div class="signup_wrap">
<div class="reg_form">

<div class="form_title">Sign Up</div>
<div class="form_sub_title">It's free and anyone can join</div>

 
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


      </div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   
      </div>
    </div>
  </div>
</div>