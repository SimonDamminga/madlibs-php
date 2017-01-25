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
			<h1 id="title">Onkunde</h1>
			<div id="flex">
				<div id="vraag">
					<p class="vrag">Wat zou je graag willen kunnen?</p>
					<p class="vrag">Met welke persoon kun je goed opschieten?</p>
					<p class="vrag">Wat is favorite getal</p>
					<p class="vrag">Wat heb je altijd bij je als je op vakantie gaat?</p>
					<p class="vrag">Wat is je beste persoonlijke eigenschap?</p>
					<p class="vrag">Wat is je slechtste persoonlijke eigenschap?</p>
					<p class="vrag">Wat is het ergste dat je kan overkomen?</p>
				</div>
				<form action="onkunde-php.php" method="post">
				<div id="answers">
					<input type="text" name="1" value="">
					<input type="text" name="2" value="">
					<input type="text" name="3" value="">
					<input type="text" name="4" value="">
					<input type="text" name="5" value="">
					<input type="text" name="6" value="">
					<input type="text" name="7" value="">
					<input type="submit" name="submit" value="Versturen">
				</div>
				</form>
			</div>
		</div>
	</main>
</body>
</html>