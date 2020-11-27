<?php $pageName = 'Contact - ';
require_once('../includes/header.php'); ?>
<div class="page-container">
	<div class="page-hero">
		<img src="/assets/img/background.jpg" />
		<div class="page-hero-overlay">
			<h1>Contact</h1>
		</div>
	</div>
	<div class="page-divider">
	</div>
	<div class="contact-container">
		<form enctype="text/plain" action="/includes/contact.php" method="get">
			<div class="first-name">
				<p><i class="fas fa-tag"></i> First Name</p>
				<input placeholder="John" name="first" type="text"></input>
			</div>
			<div class="last-name">
				<p><i class="fas fa-tag"></i> Last Name</p>
				<input placeholder="Smith" name="last" type="text"></input>
			</div>
			<p><i class="fas fa-envelope"></i> Email</p>
			<input placeholder="name@email.com" name="email" type="text"></input>
			<p><i class="fas fa-comments"></i> Message</p>
			<textarea placeholder="Enter message here..." name="message" type="text"></textarea>
			<input name="submit" type="submit"></input>
		</form>
	</div>
</div>
<?php require_once('../includes/footer.php'); ?>
