<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Positionering">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>GameWorld</title>
</head>
<body>
	<div id="logo"><li><a href="index.php">GameWorld</a></li></div>
		<div id="main-content">
			<header id="header">
				<?php
					include 'header.php';
				?>
			</header>
				<div id="ImageAboutUs">
					<img src="images/aboutUs.jpg">
				</div>
			<div id="ContactPage">
				<h1>Contact</h1>
				<div id="Contact">
					<label for="fname">E-mail</label><br >
					<input type="text" id="fname" name="Your E-mail" placeholder="Your E-mail..">
					<br >
					<label for="country">What's the problem?</label>
					<select id="country" name="country"><br >
					<option value="bug">Bug in the site</option>
					<option value="payment">problem in the payment</option>
					<option value="Question">I have a question</option>
					<option value="Other">Other</option>
					</select>
					<br >
					<label for="subject">Subject</label><br >
					<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

					<input type="submit" value="Submit">
				</div>
				<div id="contact-right">
				<label>Phone: 06-12345678</label><br >
				<br >
				<label>E-mail: GameWorld@gmail.com</label><br >
				<br >
				<label>Adres: keizerinmarialaan 2, Helmond</label>
				</div>
			</div>
		</div>
		<?php
			include 'footer.php';
		?>
</body>
</html>