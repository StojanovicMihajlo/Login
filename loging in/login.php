<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Strana za logovanje</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Uloguj se</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label style="text-align: center;">Korisnicko ime</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label style="text-align: center;">Sifra</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Uloguj se</button>
  	</div>
  	<p>
  		Nemas nalog? <a href="register.php">Registruj se</a>
  	</p>
  </form>
</body>
</html>