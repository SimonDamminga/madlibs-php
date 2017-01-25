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
			<h1 id="title">Er heerst paniek</h1>
			<div id="flex">
				<div id="vraag">
					<p class="vrag">Er heerst paniek in het koningkrijk <?php echo $_POST["3"]; ?>. Koning <?php echo $_POST["6"]; ?> is ten einde raad en als koning <?php echo $_POST["6"]; ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST["2"]; ?>. <br><br>
					"<?php echo $_POST["2"]; ?>! Het is een ramp! Het is een schande!"<br><br>
					"Mijn <?php echo $_POST["1"]; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST["5"]; ?> voor hem gekocht!"<br><br>
					"Majesteit, uw <?php echo $_POST["1"]; ?> komt vast vanzelf wel weer terug?"<br><br>
					"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST["8"]; ?> leren?"<br><br>
					"maar Sire, daar kunt u toch uw <?php echo $_POST["7"]; ?> voor gebruiken."<br><br>
					"<?php echo $_POST["2"]; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."<br><br>
					"Mij vervelen, Sire."</p>
				</div>
			</div>
		</div>
	</main>
</body>
</html>