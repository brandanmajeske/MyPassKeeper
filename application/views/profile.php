<h2>Welcome <?php echo $user_data['username'];?></h2>

<?php 
	echo '<pre>',print_r($profile, TRUE),'</pre>';
?>

<div class="row">
	<div class="span3 pull-right">
		<?php echo "<p>Username: ".$profile[0]['username']."</p>";
			echo "<p>Name: ".$profile[0]['name']."</p>";
			echo "<p>Joined: ".$profile[0]['join_date']."</p>";
		?>
	</div>
</div>