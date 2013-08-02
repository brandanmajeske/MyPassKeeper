<?php 
	foreach($data as $key => $pwd){
			$id = $pwd['id'];
			$app = $pwd['application'];
			$uid = $pwd['user_id'];
			$pw = base64_decode($pwd['password']);
	}
?>
<h3>Edit password for <?php echo $app; ?></h3>
  	<?php 
  	$attributes = array('class' => 'form', 'id' => 'form');
  	echo form_open('userhome/update', $attributes);?>
  	<?php $data = array('id' => $id, 'app' => $app, 'uid' => $uid);
  			echo form_hidden($data); ?>

  		<table class="table table-striped table-bordered">
  			<thead>
  				<td>Application</td>
  				<td>User ID</td>
  				<td>Password</td>
  			</thead>
  			<tbody>
  				<td><?php echo $app; ?></td>
  				<td><?php echo $uid; ?></td>
  				<td><input class="input-small" type="text" name="password" value="<?php echo $pw; ?>" /></td>
  				<td><a href="#" class="btn btn-success" onclick="document.getElementById('form').submit();"><i class="icon icon-white icon-refresh"></i> Update</td>
  				<td><a href="<?php echo base_url()."userhome/delete/$id"; ?>" class="btn btn-danger"><i class="icon icon-white icon-trash"></i> Delete</a></td>
  				<td><a href="<?php echo base_url(); ?>" class="btn btn-inverse"><i class="icon icon-white icon-remove"></i> Cancel</a></td>
  			</tbody>
  		</table>
  	<?php echo form_close(); ?>