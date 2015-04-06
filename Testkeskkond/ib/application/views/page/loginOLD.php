<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header login_modal_header">
        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        		<h2 class="modal-title" id="myModalLabel">Sisesta kasutajaandmed</h2>
      		</div>
      		<div class="modal-body login-modal">
      			<br/>
      			<div class="clearfix"></div>
      			<div id='social-icons-conatainer'>
	        		<div class='modal-body-left'>
	        			<div class="form-group">
		              		<input type="text" id="username" placeholder="Sisestage oma kasutajanimi" value="" class="form-control login-field">
		              		<i class="fa fa-user login-field-icon"></i>
		            	</div>

		            	<div class="form-group">
		            	  	<input type="password" id="login-pass" placeholder="Parool" value="" class="form-control login-field">
		              		<i class="fa fa-lock login-field-icon"></i>
		            	</div>

		            	<a href="#" class="btn btn-success modal-login-btn">Sisene</a>
                        <button class="btn btn-default"> Pole veel kasutajat? </button>
		            	<a href="#" class="login-link text-center">Sitt mälu vä?</a>
                    
	        		</div>
                    <br/>

	        		<div class='modal-body-right'>
	        			<div class="modal-social-icons">
                            
                            
	        				<a href='../ib/assets/fb-test/' class="btn btn-default facebook"> <i class="fa fa-facebook modal-icons"></i> Sisene kasutades Facebooki</a>
                            
	        			</div> 
	        		</div>
      		</div>
      		<div class="clearfix"></div>
      		<div class="modal-footer login_modal_footer">
      		</div>
    	</div>
  	</div>
</div>




<div class="modal fade" id="login-modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header login_modal_header">
        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        		<h2 class="modal-title" id="myModalLabel">Sisesta kasutajaandmed</h2>
      		</div>
      		<div class="modal-body registration-modal">
      			<br/>
      			<div class="clearfix"></div>
      			<div id='social-icons-conatainer'>
	        		<div class='modal-body-left'>
	        			div id="content">
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
                    <br/>
                    	
	        		<div class='modal-body-right'>
	        			<div class="modal-social-icons">
                            
                            
	        				<a href='../ib/assets/fb-test/' class="btn btn-default facebook"> <i class="fa fa-facebook modal-icons"></i> Sisene kasutades Facebooki</a>
                            
	        			</div> 
	        		</div>
      		</div>
      		<div class="clearfix"></div>
      		<div class="modal-footer login_modal_footer">
      		</div>
    	</div>
  	</div>
</div>


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
