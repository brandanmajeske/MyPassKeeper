<?php echo validation_errors('<div class="alert alert-error">', '</div>'); ?>

<?php echo form_open('login/login'); ?>
	<h2 class="page-header">Please Sign In</h2>
		<?php 
		$data = array(
			"type" => "text",
			"class" => "input-block-level",
			"name" => "username",
			"value" =>  set_value()
			);
		echo form_label('User Name', 'username'); ?>
		<?php echo form_input($data);?>

			<?php 
		$data = array(
			"type" => "password",
			"class" => "input-block-level",
			"name" => "password",
			"value" =>  set_value()
			);
		echo form_label('Password', 'password'); ?>
		<?php echo form_input($data);?>

	<p class="visible-desktop">Not a registered user? <a href="<?php echo base_url().'register'; ?>">Sign Up</a> today!</p>
	<p><button class="btn btn-custom" type="submit">Sign In</button></p>
	<p class="hidden-desktop">Not a registered user? <br /><a class="btn btn-info" href="<?php echo base_url().'register'; ?>">Sign Up</a></p>
</form>