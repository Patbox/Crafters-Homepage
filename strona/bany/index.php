<!DOCTYPE html>
<html>
	<head>
		<?php echo "<title>".$name"</title>"?>
		<link rel="stylesheet" href="includes/css/style.css">
		<link href='https://fonts.googleapis.com/css?family=Martel Sans' rel='stylesheet'>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<a href="index.php"><img id="logo" class="img-responsive" src="includes/css/logo.png"></img></a>
		<nav class="navbar">
			<div class="container-fluid">
				<ul class="nav navbar-nav" id="menu">
					<?php include 'include/head.php'?>
				</ul>
			</div>
		</nav>

		<div id="main" class="col-sm-9 container-fluid">
		<?php
		if($_GET["bany"] === "") { include 'bany/bans.php'; }
		else { include 'news.php'; }
		?>
		</div>
		<div id="bok" class="col-sm-2 container-fluid">
		<center>
			<?php include 'status.php'; ?>
			<div id="partner">
			<h3>Partnerzy</h3>
			<a href="https://mcadmins.pl" target="_blank"><img class="img-responsive partimg" src="css/mcadmins2.png" alt="Forum MCadmins"></a>
			<a href="https://BezTematu.pl" target="_blank"><img class="img-responsive partimg" src="css/BezTematu.png" alt="BezTematu"></a>
			</div>
		</center></div>
		<footer><div id="footer">Copyright &copy; 2018 Patbox. Wszystkie prawa zastrzeżone!</div></footer>
	</body>
	<link rel="stylesheet" href="css/style.css">
</html>
<script></script >