<!DOCTYPE html>
<html>
<head>
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
					<p class="vrag">Welk dier zou je nooit als huisdier willen hebben?</p>
					<p class="vrag">Wie is de belangrijkste persoon in je leven?</p>
					<p class="vrag">In welk land zou je graag willen wonen?</p>
					<p class="vrag">Wat doe je als je je verveeld?</p>
					<p class="vrag">Met welk speelgoed speelde je als kind het meest?</p>
					<p class="vrag">Bij welke docent spijbel je het liefst?</p>
					<p class="vrag">Als je € 100.000,-had, wat zou je dan kopen?</p>
					<p class="vrag">Wat is je favotiete bezigheid?</p>
				</div>
				<form action="Er-heerst-paniek.php" method="post">
				<div id="answers">
					<input type="text" name="1" value="">
					<input type="text" name="2" value="">
					<input type="text" name="3" value="">
					<input type="text" name="4" value="">
					<input type="text" name="5" value="">
					<input type="text" name="6" value="">
					<input type="text" name="7" value="">
					<input type="text" name="8" value="">
					<input id="knopje" type="submit" name="submit" value="Versturen">
				</div>
				</form>
			</div>
		</div>
	</main>
</body>
</html>