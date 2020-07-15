<?php
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);

if (!empty($name) && !empty($email) && !empty($message)) {
	if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$from = $email;
		$to = "d.surajev@gmail.com";
		$subject = "Nauja žinutė";
		$author = 'Nuo: ' . $name . ', ' . $email;
		$content = htmlspecialchars($message);
		mail($to, $subject, $author, $content, $from);
		echo "<script>alert('Thanks, your message was received. I will get back to you shortly!');</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="lt">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha512-xA6Hp6oezhjd6LiLZynuukm80f8BoZ3OpcEYaqKoCV3HKQDrYjDE1Gu8ocxgxoXmwmSzM4iqPvCsOkQNiu41GA==" crossorigin="anonymous" />
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="css/style.css">
		<title>Dmtrij Surajev portfolio website.</title>
	</head>
	<body>

	<!-- Navbar -->
		<nav class="site-nav">
			<div class="logo">&lt;dmitrijsurajev&gt;</div>
			<a href="#" class="hamburger">
				<div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
			</a>
			<div class="nav-links">
				<ul>
					<li><a href="#projects">My projects</a></li>
					<li><a href="#skills">Skills</a></li>
					<li><a href="#contact">Contact me</a></li>
				</ul>
			</div>
		</nav>

	<!-- Intro section -->
		<section id="welcome" class="welcome-section">
			<div class="welcome-text">
				<h1>Front-end<br> Web developer</h1>
				<p class="main-text">Freshly cooked developer with a focus on front end passionate about building blazing quick, pixel-perfect single-page apps and websites. Energetic, highly motivated, a good communicator and with a good knowledge of many buzzwords. Ready to join a team of developers, learn and contribute.
				</p>
				<div class="button-wrapper">
					<a href="#projects" class="button">My projects</a>
				</div>
			</div>
		</section>

	<!-- Skills section -->
		<div class="skills-header-wrapper">
			<h2 class="Skills-header" id="skills">Skills</h2>
		</div>

		<section class="skills">
			<ul class="skills-list">
				<li>
					<i class="fab fa-6x fa-html5" data-toggle="tooltip" data-placement="top" title="HTML5"></i>
				</li>
				<li>
					<i class="fab fa-6x fa-css3-alt" data-toggle="tooltip" data-placement="top" title="CSS3"></i>
				</li>
				<li>
					<i class="fab fa-6x fa-js-square" data-toggle="tooltip" data-placement="top" title="JavaScript"></i>
				</li>
				<li>
					<i class="fab fa-6x fa-php" data-toggle="tooltip" data-placement="top" title="PHP"></i>
				</li>
			</ul>
		</section>

	<!-- Portfolio section  -->
		<div class="projects-header-wrapper">
			<h2 id="projects">Some of my projects</h2>
		</div>
		<section class="portfolio">
			<div class="projects">
				<a href="#">
					<img src="assets/images/Random%20color%20generator.jpg" alt="Color generator image.">
				</a>
				<a href="bmicalculator/index.html">
					<img src="assets/images/KMI.jpg" alt="BMI calculator image">
				</a>
			</div>
		</section>

	<!-- Contact form -->
		<section class="contact" id="contact">
			<h2>Get in touch!</h2>
			<p class="main-text">Fill in the form below and I will get back to you ASAP!</p>
			<form method="POST">
				<input type="text" placeholder="NAME" name="name">
				<input type="email" placeholder="EMAIL" name="email">
				<textarea placeholder="MESSAGE" name="message"></textarea>
				<button class="button">Send</button>
			</form>
		</section>

	<!-- Footer -->
		<footer>
			<div class="footer">
				<ul class="social">
					<li>
						<a href="https://github.com/dsurajev/kursai" target="_blank"
						>
							<i class="fab fa-3x fa-github"></i>
						</a>
					</li>
					<li>
						<a href="https://www.linkedin.com/in/dmitrij-surajev-5a4a09111/" target="_blank">
							<i class="fab fa-3x fa-linkedin"></i>
						</a>
					</li>
				</ul>
				<p class="copyright">Copyright 2020 Dmitrij Surajev</p>
			</div>
		</footer>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/cookie-bar/cookiebar-latest.min.js?theme=white&always=1&top=1&showPolicyLink=1&privacyPage=file%3A%2F%2F%2FC%3A%2FUsers%2Fdmitr%2FOneDrive%2FDesktop%2Fnamudarbai%2Fprojektas%2Findex.html%3F%23"></script>
		<script src="scripts/scripts.js"></script>
	</body>
</html>
