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
				<div id="cart-page">
					<h1>Checkout</h1>
					<div id="productOne">
						<img src="images/pubg.jpg">
						<label id="labelOne">Pubg</label>
						<label id="labelDescOne">PLAYERUNKNOWN'S BATTLEGROUNDS is a battle royale shooter that pits 100 players against each other.</label>
						<label id="labelPriceOne">Total: $29.99</label>
					</div>
					<div id="productTwo">
						<img src="images/R6S.jpg">
						<label id="labelTwo">R6S</label>
						<label id="labelDescTwo">Tom Clancy's Rainbow Six Siege is het nieuwste deel in de veelgeprezen first-person shooter franchise ontwikkeld door Ubisoft Montreal voor de nieuwe generatie consoles en PC.</label>
						<label id="labelPriceTwo">Total: $9.99</label>
					</div>
					<div id="productThree">
						<img src="images/terraria.jpg">
						<label id="labelThree">Terraria</label>
						<label id="labelDescThree">The very world is at your fingertips as you fight for survival, fortune, and glory. Delve deep into cavernous expanses, seek out ever-greater foes to test your mettle in combat, or construct your own city - In the World of Terraria, the choice is</label>
						<label id="labelPriceThree">Total: $9.99</label>
					</div>
					<div id="totalPrice"><button>Buy</button><label>Total: $49.97</label></div>
				</div>
					<div class="clearfix"></div>
				</div>
				<br />		
		</div>
		<?php
			include 'footer.php';
		?>
</body>
</html>