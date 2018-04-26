<?php 
  session_start(); 
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Moras se ulogovati";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pocetna</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Pocetna strana</h2>
</div>
<div class="content">
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Dobro dosao <strong><?php echo $_SESSION['username']; ?></strong></p><br>
    	<p style="text-align: right;"> <a href="index.php?logout='1'" style="color: red;">izloguj se</a> </p>
    <?php endif ?>
</div><br>
<form action="search.php" method="get">
	<input type="text" name="search" placeholder="Trazi...">
	<input type="submit" value="Trazi">
</form>
		
</body>
</html>