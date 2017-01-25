<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="madlipsicon.jpg" type="image/`jpg" sizes="128x128">
	<link rel="stylesheet" type="text/css" href="index.css">
	<title>Madlips</title>
</head>
<body>

	<header><h1>Madlips</h1></header>
	<main>
		<div>
			<div id="text-align">
				<a href="madlips.php"><button>Er heerst paniek...</button></a>
				<a href="onkunde.php"><button>Onkunde</button></a>
			</div>
		</div>
		<div id="vragen">
			<h1 id="title">Onkunde</h1>
			<div id="flex">
				<div id="vraag">
					<p class="vrag">Er zijn veel mensen die niet kunnen <?php echo $_POST["1"]; ?>. Neem nou <?php echo $_POST["2"]; ?>. Zelfs met de hulp van een <?php echo $_POST["4"]; ?> of zelfs <?php echo $_POST["3"]; ?> kan <?php echo $_POST["2"]; ?> niet <?php echo $_POST["1"]; ?>. Dat heeft niet te maken met een gebrek aan <?php echo $_POST["5"]; ?>, maar met een te veel aan <?php echo $_POST["6"]; ?>. Te veel <?php echo $_POST["6"]; ?> leidt tot <?php echo $_POST["7"]; ?> en dat is niet goed als je wilt <?php echo $_POST["1"]; ?>. Helaas voor <?php echo $_POST["2"]; ?>.</p>
				</div>
			</div>
		</div>
	</main>
</body>
</html>