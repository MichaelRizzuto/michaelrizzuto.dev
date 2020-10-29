<?php $pageName = 'Portfolio';
require_once('includes/header.php'); ?>
<div class="content-container">
	<div id="about" class="about-container">
		<h2>about</h2>
		<h1>Creating <span id="typewriter"></span> that work</h1>
		<h2>information about me</h2>
		<div class="about-description">
			<p>My name is <strong>Michael Rizzuto</strong>, I am a sixteen year old technology enthusiast based in Pennsylvania. I got my start in the gaming industry, where I still find myself spending some of my sparetime, but quickly evolved into a passion and desire to create my own games or contribute to others. During this time I also got introduced to the hosting industry where I found employment and a source of income. I spend my time nowadays enjoying my hobbies and doing freelance for others. My hobbies include gaming, as mentioned earlier, football, wrestling and overall I'm just a social person and enjoy talking with others.</p>
		</div>
		<h2>what i work with</h2>
		<div class="about-languages">
			<img title="PHP" src="/assets/img/php.png" />
			<img title="Javascript" src="/assets/img/javascript.png" />
			<img title="HTML" src="/assets/img/html.png" />
			<img title="CSS" src="/assets/img/css.png" />
			<img title="LUA" src="/assets/img/lua.png" />
			<img title="C#" src="/assets/img/csharp.png" />
			<img title="NodeJS" src="/assets/img/nodejs.png" />
			<img title="React JS" src="/assets/img/react.png" />
			<img title="MySQL" src="/assets/img/mysql.png" />
		</div>
	</div>
	<div id="projects" class="projects-container">
		<h2>projects</h2>
		<div class="projects-list">
			<div class="project-individual">
				<a href="https://primestudios.co" target="_blank">
					<div class="project-link">
						<img src="/assets/img/primestudios.png" />
						<h1>Prime Studios</h1>
						<p>Prime Studios is a freelance company focused on building powerful websites for our clients.</p>
					</div>
				</a>
			</div>
			<div class="project-individual">
				<a href="https://valiantservers.net" target="_blank">
					<div class="project-link">
						<img src="/assets/img/valiant.png" />
						<h1>Valaint Servers</h1>
						<p>A custom tailored Garry's Mod experience based on City Roleplay.</p>
					</div>
				</a>
			</div>
			<div class="project-individual">
				<a href="https://padojrp.net" target="_blank">
					<div class="project-link">
						<img src="/assets/img/padojrp.png" />
						<h1>PADOJRP</h1>
						<p>PADOJRP is a FiveM community that puts the player first based on the state of Pennsylvania.</p>
					</div>
				</a>
			</div>
			<div class="project-individual">
				<a href="https://encryptedlaser.com" target="_blank">
					<div class="project-link">
						<img src="/assets/img/encryptedlaser.png" />
						<h1>Encrypted Laser</h1>
						<p>Encrypted Laser is a company that is mainly engaged in the hosting industry.</p>
					</div>
				</a>
			</div>
			<div class="project-individual">
				<a href="https://thiradus.com" target="_blank">
					<div class="project-link">
						<img src="/assets/img/thiradus.png" />
						<h1>Thiradus</h1>
						<p>Thiradus is a software development company targetted at creating products for gaming communities.</p>
					</div>
				</a>
			</div>
		</div>
	</div>
	<div id="contact" class="contact-container">
		<h2>contact</h2>
		<form action="https://formspree.io/mgenryba" method="POST">
			<label>name</label>
		  	<input type="text" name="name">
		  	<label>email</label>
		  	<input type="email" name="_replyto">
		  	<label>comment</label>
		  	<input type="text" name="comment">
		  	<input type="submit" value="Send">
		</form>
	</div>
</div>
<?php require_once('includes/footer.php'); ?>
