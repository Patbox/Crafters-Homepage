<!DOCTYPE html>
<html>
	<head>
		<title>Crafters.ga</title>
		<link rel="stylesheet" href="css/style.css">
		<link href='https://fonts.googleapis.com/css?family=Martel Sans' rel='stylesheet'>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
		<link rel="manifest" href="/favicon/site.webmanifest">
		<link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
		<link rel="shortcut icon" href="/favicon/favicon.ico">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-config" content="/favicon/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">
	</head>
	<body>
		<a href="https://crafters.ga"><img id="logo" class="img-responsive" src="css/logo.png"></img></a>
		<nav class="navbar">
			<div class="container-fluid">
			<button type="button" class="navbar-toggle btn-block" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			</button>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav" id="menu">
						<li><a href="https://crafters.ga">Główna</a></li>
						<li><a href="/sklep/">Sklep</a></li>
						<li><a href="https://crafters.ga?bany">Lista banów</a></li>
						<li><a href="https://crafters.ga/discord">Discord</a><li>
						<li><a href="https://www.youtube.com/channel/UCKTtOCQcQlK9pxifcAGhFnQ">Youtube</a></li>
						<li><a href="https://crafters.ga?faq">FAQ</a></li>
						<li><a href="https://stats.uptimerobot.com/p2golF4yr">Status</a></li>
						<li><a href="https://wiki.crafters.ga/">Wiki</a></li>
						
					</ul>
					<ul class="nav navbar-nav navbar-right" id="menu" style="margin-right:1%;">
						<li><a href="https://crafters.ga?kontakt">Kontakt</a><li>
					</ul>
				</div>
			</div>
		</nav>

		<div id="main" class="col-sm-9 container-fluid">
		<?php
		if($_GET["bany"] === "") { 
			include 'bany/bans.php';
		}
		else if($_GET["kontakt"] === "") { 
			include 'kontakt.html';
		}
		else if($_GET["faq"] === "") { 
			include 'faq.html'; 
		}
		else if($_GET["sklep"] === "") { 
			include 'sklep/index.php'; 
		}
		else { 
			include 'news.php'; }
		?>
		</div>
		<div id="bok" class="col-sm-2 container-fluid">
		<center>
			<?php include 'status.php'; ?>
			<div id="partner">
			<h3>Partnerzy</h3>
			<a href="https://mcadmins.pl" target="_blank"><img class="img-responsive partimg" src="css/mcadmins2.png" alt="Forum MCadmins"></a>
			<a href="https://mcblog.cf" target="_blank"><img class="img-responsive partimg" src="css/mcblog.png" alt="MCBlog"></a>
			</div>
		</center></div>
		<footer><div id="footer">Copyright &copy; 2018 Patbox. Wszystkie prawa zastrzeżone!</div></footer>
	</body>
	<link rel="stylesheet" href="css/style.css">
</html>
<script></script >