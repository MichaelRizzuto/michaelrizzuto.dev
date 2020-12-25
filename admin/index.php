<?php

require_once('../includes/restriction.php');
require_once('../includes/config.php');

$mySQLInstance = mysqli_connect($host, $user, $pass, $database, $port);

$inbox = array();

$query = 'select * from contact';

$result = mysqli_query($mySQLInstance, $query);

while ($row = mysqli_fetch_assoc($result)) {
	$inbox[] = $row;
}

$inbox = json_encode($inbox);

mysqli_close($mySQLInstance);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Inbox - Michael Rizzuto</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<meta charset="UTF-8">
		<link href="/assets/css/admin.css" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
	</head>
	<body>
		<div class="message-container">
			<table>
				<tr>
					<td>Date</td>
					<td>Name</td>
					<td>Email</td>
					<td>Read</td>
					<td>View</td>
				</tr>
				<?php
					$inbox = json_decode($inbox);
					$inbox = array_reverse($inbox);
					foreach ($inbox as $message) {
						echo '				<tr>' . PHP_EOL;
						echo '					<td>' . $message->date . '</td>' . PHP_EOL;
						echo '					<td>' . $message->first . ' ' . $message->last . '</td>' . PHP_EOL;
						echo '					<td>' . $message->email . '</td>' . PHP_EOL;
						if ($message->read == "true") {
							echo '					<td><i title="Read" class="fas fa-check-circle"></i></td>' . PHP_EOL;
						} else {
							echo '					<td><i title="Not Read" class="fas fa-times-circle"></i></td>' . PHP_EOL;
						}
						echo '					<td><a href="view?id=' . $message->id . '">view</a></td>' . PHP_EOL;
						echo '				</tr>' . PHP_EOL;
					}
				?>
			</table>
		</div>
	</body>
</html>
