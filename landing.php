<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Php Login</title>
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

		<div class="sign1">
			<h1 class="signup">Welcome to the Landing Page</h1>

			<?php
				session_start();
				echo "<label for=\"s-email\">Email:</label>";
				echo "<input class=\"user\" name = \"name\" type=\"text\" id=\"s-email\" placeholder=\"Username\" value=\" $_SESSION[email] \" readonly>";
				echo "<label for=\"s-name\">Username:</label>";
				echo "<input class=\"user\" name = \"name\" type=\"text\" id=\"s-name\" placeholder=\"Username\" value=\" $_SESSION[username] \" readonly>";
			?>
			
		</div>
		
	</div>

</body>
</html>