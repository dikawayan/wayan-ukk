<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
</head>
<body>
	<div class="container">
		<form action="controller/proces_login.php" method="POST" class="login-username">
			<p class="login-text"> Login </p>
			<div class="input-group">
				 <input type="text" placeholder="Username" name="username" required>
			</div>
			<div class="input-group">
				 <input type="password" placeholder="password" name="password" required>
			</div>
			<div class="input-group">
				 <button name="submit" class="btn"> Login </button>
			</div>
			<p class="login-register-text"> Anda belum punya akun ? <a href="register_view.php"> Register </a> </p>
		</form>
	</div>
</body>
</html>