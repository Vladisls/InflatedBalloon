<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade bs-modal-sm" id="kandideerin" tabindex="-1" role="dialog" aria-hidden="true">
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
            
            <!-- Sign In Form -->
				<?php echo validation_errors(); ?>
				<?php echo form_open('verifylogin'); ?>
				<label for="email">email:</label>
				<input type="text" size="20" id="email" name="email"/>
				<br/>
				<label for="password">Password:</label>
				<input type="password" size="20" id="passowrd" name="password"/>
				<br/>
				<input type="submit" value="Login"/>
				</form>
        </div>
        <div class="tab-pane fade" id="signup">
			<?php echo validation_errors('<p class="error">'); ?>
				<?php echo form_open("user/registration"); ?>
				<p>
				<label for="email">Your Email:</label>
				<input type="text" id="email" name="email" value="<?php echo set_value('email'); ?>" />
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