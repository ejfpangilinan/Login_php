<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Php Sign Up</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Rock Salt' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<link rel="stylesheet" href="styles.css">
</head>

<body>

	<div class="d-flex p-2 justify-content-center page-content">

		<form class="sign" id="sign-up" action='signup.php' method="post">

			<h1 class="signup">Logo.co</h1>

			<input class="s-entry" name = "email" type="email" id="s-mail" placeholder="Email" required>
			<input class="s-entry" name = "name" type="text" id="s-name" placeholder="Username" required>
			<input class="s-entry" name = "pass" type="password" id="s-password" placeholder="Password" required>

			<button id="sign_b" class="login_button" form="sign-up" type="submit" >Sign Up</button>

			<p class="line"></p>

			<p class="account" > Already have an account? <a class="log_link" href="login_page.php">Log In</a> </p>

		</form>
	</div>

</body>
</html>