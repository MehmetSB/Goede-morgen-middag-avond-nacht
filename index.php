<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<title>Goede morgen/middag/avond/nacht</title>
	<link rel="stylesheet" href="css/style.css">
</head>
	<body>
		<?php
			date_default_timezone_set('Europe/Amsterdam');
			$tijd = date("H:i:s");
			if ($tijd >"06:00" && $tijd < "12:00")
			{
				echo '<body style="background-image: url(./backgrounds/morning.png)">';
				echo '<h1>Goede morgen!</h1>';
				echo '<h2>Het is nu ' . $tijd . '</h2>';
			}
			else if ($tijd >"12:00" && $tijd < "18:00")
			{
				echo '<body style="background-image: url(./backgrounds/afternoon.png)">';
				echo '<h1>Goede middag!</h1>';
				echo '<h2>Het is nu ' . $tijd . '</h2>';
			}
			else if ($tijd >"18:00" && $tijd < "24:00")
			{
				echo '<body style="background-image: url(./backgrounds/evening.png)">';
				echo '<h1>Goede avond!</h1>';
				echo '<h2>Het is nu ' . $tijd . '</h2>';
			}
			else if ($tijd >"00:00" && $tijd < "06:00")
			{
				echo '<body style="background-image: url(./backgrounds/night.png)">';
				echo '<h1>Goede nacht!</h1>';
				echo '<h2>Het is nu ' . $tijd . '</h2>';
			}
		?>
	</body>
</html>
