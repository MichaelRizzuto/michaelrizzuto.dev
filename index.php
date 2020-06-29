<?php $pageName = 'Portfolio';
require_once('includes/header.php'); ?>
<div class="content-container">
	<div class="content-about">
		<h2>about me</h2>
		<h1>Creating <span id="typewriter"></span> that work</h1>
		<script>
			new TypeIt("#typewriter", {
			    speed: 100,
			    deleteSpeed: 100,
			    loop: true,
			    waitUntilVisible: true
			})
			    .type("websites")
			    .pause(1000)
			    .delete(8)
			    .type("applications")
			    .pause(1000)
			    .delete(12)
			    .type("products")
			    .pause(1000)
			    .delete(8)
			    .type("projects")
			    .pause(1000)
			    .go();
		</script>
	</div>
</div>
<?php require_once('includes/footer.php'); ?>
