<?php include('server.php') ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <p>Hello, world!</p>
  <p>This is where you register.</p>
	
<form method="post" action="./register.php">
	<?php include('errors.php'); ?>
	<div>
	  <label>Username</label>
	  <input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div>
	  <label>Email</label>
	  <input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div>
	  <label>Password</label>
	  <input type="password" name="password_1">
	</div>
	<div>
	  <label>Confirm password</label>
	  <input type="password" name="password_2">
	</div>
	<div>
	  <button type="submit" class="btn" name="reg_user">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>


  <script src="js/script.js"></script>
</body>

</html>
