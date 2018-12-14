<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Positionering">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>GameWorld</title>
</head>
<body>
	<div id="logo">GameWorld</div>
		<div id="main-content">
			<header id="header">
				<?php
					include 'header.php';
				?>
			</header>
				<div id="image">
					<img src="images/background.jpg">
					<label><h1>Welcome to GameWorld</h1><label>
					<label><h2>The most complete webshop!</h2></label>
				</div>
			</div>	
			<div id="blue-box">
				<ul>
					<li><a href="Games.php?gameCategory=1">Playstation</a></li>
				</ul>
			</div>
			<div id="black-box">
				<ul>
					<li><a href="Games.php?gameCategory=2">PC</a></li>
        		</ul>	
			</div>
			<div id="green-box">
				<ul>
					 <li><a href="Games.php?gameCategory=3">Xbox</a></li>
				</ul>
			</div>
			<?php
				include 'footer.php';
			?>
		</div>
</body>
</html>