<div class="row">
<div class="span4">
	<h2>Add New Password</h2>
	<?php echo validation_errors('<div class="alert alert-error">', '</div>'); ?>
	<?php echo form_open('userhome/validate'); ?>
	<label for="application">Application<br />
    <input class="input-block-level" type="text" name="app" value="<?php echo set_value('app'); ?>"></label>
    <label for="user_id">User ID<br />
    <input class="input-block-level" type="text" name="user_id" value="<?php echo set_value('user_id'); ?>" ></label>
    <label for="password">Password<br />
    <input class="input-block-level" type="password" name="password" /></label>
    <label for="password">Password Confirmation<br />
    <input class="input-block-level" type="password" name="passconf" /></label>
	<button id="submit" class="btn btn-primary">Save</button>  <a href="<?php echo base_url(); ?>" class="btn pull-right">Cancel</a>
	<?php echo form_close(); ?>
</div>
</div>