<!-- Button trigger modal -->
<link href="./assets/css/login-added.css" rel="stylesheet">
<!-- Modal -->
<div class="modal fade bs-modal-sm" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            
				<?php echo form_open("user/registration"); ?>
                <div class="sisu">
				<p>
				<label class="textinmod" for="email">Your Email:</label>
				<input class="textinmod" type="text" id="email" name="email" value="<?php echo set_value('email'); ?>" />
				</p>
					<p>
				<label class="textinmod" for="password">Password:</label>
				<input class="textinmod" type="password" id="password" name="password" value="<?php echo set_value('password'); ?>" />
				</p>
				<p>
				<label class="textinmod" for="con_password">Confirm Password:</label>
				<input class="textinmod" type="password" id="con_password" name="con_password" value="<?php echo set_value('con_password'); ?>" />
				</p>
				<p>
				<input class="btn btn-success" type="submit"  value="Submit" />
				</p>
                </div>
			<?php echo form_close(); ?>
			
			<div class="modal-footer">
				<center>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</center>
			</div>
	  
			
	  
        
		</div>
    </div>
</div>
