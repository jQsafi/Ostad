<!DOCTYPE html>
<html>
<head>
	<title>My Personal Blog - Contact Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div class="container">
			<img src="logo.png" alt="Logo">
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="blog.php">Blog</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header>
	
	<section id="contact">
		<div class="container">
			<h2>Contact Us</h2>
			<form method="post" action="submit-form.php">
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" required>
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" required>
				<label for="subject">Subject:</label>
				<input type="text" id="subject" name="subject" required>
				<label for="message">Message:</label>
				<textarea id="message" name="message" required></textarea>
				<input type="submit" value="Submit">
			</form>
		</div>
	</section>
	
	<footer>
		<div class="container">
			<p>&copy; 2023 My Personal Blog</p>
		</div>
	</footer>
</body>
</html>
