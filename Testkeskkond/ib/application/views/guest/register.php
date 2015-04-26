<!-- Button trigger modal -->
<!--<link rel="stylesheet" href="./assets/css/login-added.css" type="text/css" >-->
<!-- Modal -->
<div class="modal fade bs-modal-sm" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            
			<?php echo form_open("user/registration"); ?>
                <div class="sisu">
				<p>
				<label class="textinmod" for="email_r">Your Email:</label>
				<input class="textinmod" type="text" id="email_r" name="email" value="<?php echo set_value('email_r'); ?>" />
				</p>
					<p>
				<label class="textinmod" for="password_r">Password:</label>
				<input class="textinmod" type="password" id="password_r" name="password_r" value="<?php echo set_value('password_r'); ?>" />
				</p>
				<p>
				<label class="textinmod" for="con_password_r">Confirm Password:</label>
				<input class="textinmod" type="password" id="con_password_r" name="con_password_r" value="<?php echo set_value('con_password_r'); ?>" />
				</p>
				<p>
				<input class="btn btn-success" type="submit"  value="Submit" />
				</p>
                </div>
			<?php echo form_close(); ?>
			
			<div class="modal-footer">

					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

			</div>
	  
			
	  
        
		</div>
    </div>
</div>
