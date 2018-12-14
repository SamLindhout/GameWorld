<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gameworld";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_GET['gameCategory']))
{
	$categoryId = $_GET['gameCategory'];
}
else
{
	$categoryId = "";
}

if(isset($categoryId) && $categoryId != "")
{
	$sql = "SELECT * FROM games WHERE gameCategory = '$categoryId'";
} 
else 
{
	$sql = "SELECT * FROM games"; 
}

$result = mysqli_query($conn, $sql);

$games = array();

while($row = mysqli_fetch_assoc($result)) 
{
	$games[] = $row;
}

$conn->close();

?>
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
			<div id="CategoryName">
			<?php
			if($categoryId == 1)
			{
				echo "Playstation";
			}
			if($categoryId == 2)
			{
				echo "PC";
			}
			if($categoryId == 3)
			{
				echo "Xbox";
			}

			if(!isset($_GET['gameCategory'])) {
				echo "all Games";
			}
			?>
			</div>
				<div class="products-container">
					<?php
					foreach($games as $key => $game)
					{
						?>
						<div class="Product-item">
							<h2><div class="gametitle"><?php echo $game['gameTitle']; ?></div></h2>
							<h3><div class="gameprice"><?php echo $game['gamePrice']; ?></div></h3>
							<div class="gameimage"><img src="<?php echo $game['gameImage']; ?>"></div>
							<button onclick="location.href='cart.php'">order</button>
						</div>
						<?php
					}

					?>
					<div class="clearfix"></div>
				</div>
				<br />		
		</div>
		<?php
			include 'footer.php';
		?>
</body>
</html>