
	<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Application</th>
			<th>User ID</th>
			<th>Password</th>
		</tr>
	</thead>
	<tbody>
	<?php 
		$i = 0;
		foreach($data as $key => $pwd){
			$i++;
			echo '<tr>';
				echo '<td>';
					echo $pwd['application'];
				echo '</td>';
				echo '<td>';
					echo $pwd['user_id'];
				echo '</td>';
				echo '<td class="passwd">';
					echo "<span class=\"passwd\">".base64_decode($pwd['password'])."</span>";
				echo '</td>';
				echo '<td>';
					echo '<a class="btn btn-info btn-mini pull-right" href="'.base_url().'userhome/edit/'.$pwd['id'].'"><i class="icon icon-white icon-edit"></i> Edit</a>';
				echo '</td>';
			echo '</tr>';
		}
	?>
	</tbody>
	</table>

	<a href="<?php echo base_url().'userhome/addNew'?>" class="btn btn-inverse pull-right block">Add New</a>
	
