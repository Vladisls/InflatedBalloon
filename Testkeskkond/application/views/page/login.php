<!-- Button trigger modal -->
<link href="./assets/css/login-added.css" rel="stylesheet">

<!-- Modal -->
<div class="modal fade bs-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

            <!-- Sign In Form -->
				
				<?php echo form_open('verifylogin'); ?>
                <div class="sisu">
				<label class="textinmod" for="email">E-mail:</label>
				<input class="textinmod" type="text" size="20" id="email" name="email"/>
				<br/>
				<label class="textinmod" for="password">Password:</label>
				<input class="textinmod" type="password" size="20" id="passowrd" name="password"/>
				<br/>
                <input type="submit" class='btn btn-danger' value="Login"/>
                <button type="button" class="btn btn-primary" data-dismiss='modal'>Login with FB</button>
				
				</form>
                </div>
                <?php echo validation_errors(); ?>
		
		<div class="modal-footer">
			<center>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</center>
		</div>
    </div>   
  </div>
</div>
