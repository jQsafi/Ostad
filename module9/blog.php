<!DOCTYPE html>
<html>
<head>
	<title>My Personal Blog - Blog</title>
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
	
	<section id="blog">
		<div class="container">
			<h2>Blog</h2>
			<div class="posts">
				<div class="post">
					<img src="post1.jpg" alt="Post 1">
					<h3>Post Title 1</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et velit id nibh vehicula pharetra nec eu tellus.</p>
					<a href="single-post.php">Read More</a>
				</div>
				<div class="post">
					<img src="post2.jpg" alt="Post 2">
					<h3>Post Title 2</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et velit id nibh vehicula pharetra nec eu tellus.</p>
					<a href="single-post.php">Read More</a>
				</div>
				<div class="post">
					<img src="post3.jpg" alt="Post 3">
					<h3>Post Title 3</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et velit id nibh vehicula pharetra nec eu tellus.</p>
					<a href="single-post.php">Read More</a>
				</div>
			</div>
			<aside>
				<form>
					<input type="text" placeholder="Search...">
					<button type="submit">Go</button>
				</form>
				<ul>
					<li><a href="#">Category 1</a></li>
					<li><a href="#">Category 2</a></li>
					<li><a href="#">Category 3</a></li>
				</ul>
			</aside>
		</div>
	</section>
	
	<footer>
		<div class="container">
			<p>&copy; 2023 My Personal Blog</p>
		</div>
	</footer>
</body>
</html>
