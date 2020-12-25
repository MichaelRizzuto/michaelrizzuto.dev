<?php

session_start();

require_once('../../includes/config.php');
require_once('../../includes/functions.php');

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login - Michael Rizzuto</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<meta charset="UTF-8">
		<link href="/assets/css/admin.css" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
	</head>
	<body>
		<?php
			if (isset($_SESSION['failedLogin']) && $_SESSION['failedLogin'] == true) {
				echo '<p>Incorrect Username or Password!</p>' . PHP_EOL;
				$_SESSION['failedLogin'] = false;
			}
		?>
		<form enctype="text/plain" action="../../includes/authenticate.php" method="get">
			<input name="username" type="text" placeholder="Username"></input>
			<br />
			<input name="password" type="password" placeholder="Password"></input>
			<br />
			<input type="submit" value="Login"></input>
		</form>
	</body>
</html>
