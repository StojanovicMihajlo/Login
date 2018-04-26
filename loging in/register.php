<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Strana za registraciju</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label style="text-align: center;">Korisnicko ime</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label style="text-align: center;">Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label style="text-align: center;">Sifra</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label style="text-align: center;">Potvrdi sifru</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Registracija</button>
  	</div>
  	<p>
  		Vec imas nalog? <a href="login.php">Uloguj se</a>
  	</p>
  </form>
</body>
</html>