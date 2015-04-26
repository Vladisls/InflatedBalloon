<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade bs-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

            <!-- Sign In Form -->
				<div class="container">
				<?php echo form_open('verifylogin'); ?>
                
					<label class="textinmod" for="email">E-mail:</label>
					<input class="textinmod" type="text" size="20" id="email" name="email"/>
					<br/>
					<label class="textinmod" for="password">Password:</label>
					<input class="textinmod" type="password" size="20" id="password" name="password"/>
					<br/>
					<input type="submit" class='btn btn-danger' value="Login"/>
                   

				</form>
				</div>
                <?php echo validation_errors(); ?>
		
				<div class="modal-footer">
			
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				
			
		</div>
    </div>   
  </div>
</div>
