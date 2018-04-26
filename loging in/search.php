<?php 
  include('server.php'); 
	
if(isset($_GET['search'])){
	$search = $db->escape_string($_GET['search']);
	$query = $db->query("SELECT * FROM users WHERE usersname LIKE '%{$search}%'");
	}
	?>
	<div>
	Nadjen: <?php echo $query->num_rows; ?>
	</div>
	<?php
	
	if($query->num_rows) {
		while($r = $query->fetch_object()) {
		?>
			<div>
			<p><?php echo $r->usersname; ?> </p>
		<?php
		}
	}
	?>
