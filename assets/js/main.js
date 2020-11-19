function homeScroll() {
	document.getElementById("summary").scrollIntoView({behavior: "smooth"})
}

function OnLoadEvents() {
	new TypeIt("#hero_description", {
		speed: 100,
		deleteSpeed: 100,
		loop: true,
	})
		.type("Software Engineer")
		.pause(1000)
		.delete(17)
		.type("Web Developer")
		.pause(1000)
		.delete(13)
		.type("UI/UX Designer")
		.pause(1000)
		.delete(14)
		.type("System Administrator")
		.pause(1000)
		.delete(20)
		.type("Tech Enthusiast")
		.pause(1000)
		.delete(15)
		.type("Casual Gamer")
		.pause(1000)
		.delete(12)
		.type("Student")
		.pause(1000)
		.go();
}

window.onload = OnLoadEvents;