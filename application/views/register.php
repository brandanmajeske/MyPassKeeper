<h2>Register</h2>

<?php echo validation_errors('<div class="alert alert-error">', '</div>'); ?>

<?php echo form_open('register/validate'); ?>

<label>Username</label>
<input type="text" name="username" value="<?php echo set_value('username'); ?>"  />

<label>Email Address</label>
<input type="text" name="email" value="<?php echo set_value('email'); ?>"  />

<label>First Name</label>
<input type="text" name="first_name" value="<?php echo set_value('first_name'); ?>"  />

<label>Last Name</label>
<input type="text" name="last_name" value="<?php echo set_value('last_name'); ?>"  />

<label>Password</label>
<input type="password" name="password" value="<?php echo set_value('password'); ?>"  />

<label>Password Confirm</label>
<input type="password" name="passconf" value="<?php echo set_value('passconf'); ?>"  />

<label class="checkbox">
<input type="checkbox" name="tos" value="1" <?php echo set_checkbox('tos'); ?> /><a href="#TOSModal" data-toggle="modal">I Agree to the Terms of Service</a>
</label>
<input type="submit" class="btn btn-custom" value="Register" />
<?php echo form_close(); ?>


<div id="TOSModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="TOSModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">-X-</button>
    <h3 class="ModalLabel">Terms of Service</h3>
  </div>
  <div class="modal-body">
    	<p>This should be some kind of disclaimer ... TBD</p>
  </div>
  <div class="modal-footer">
    
  </div>
</div>
