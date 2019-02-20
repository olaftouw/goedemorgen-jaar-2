	<?php
		$tijdzone = ("Europe/Amsterdam");       // hier zeg ik welke time zone hij moet pakken
		date_default_timezone_set($tijdzone);	// hier zegt hij dat de default $tijdzone is
		$tijd = date('H:i:s');					// hier laat ik de uren de minuten en de secondes zien

		if ($tijd >  "06:00" && $tijd < "12:00"){	// hier zeg ik als de tijd tussen 06:00 en 12:00 is is het goedemorgen!
			echo '<p class="tijdstip">Goedemorgen!</p>';
			echo '<p class="tijd">Het is nu '.$tijd.'</p>'; // hier laat ik de tijd zien
			echo '<body style="background-image: url(./backgrounds/morning.png)"';	// dit is de achtergrond die word weergegeven
		}
		elseif ($tijd >  "12:00" && $tijd < "18:00"){
			echo '<p class="tijdstip">Goede Middag!</p>';
			echo '<p class="tijd">Het is nu '.$tijd.'</p>';
			echo '<body style="background-image: url(./backgrounds/afternoon.png)"';
		}	
		elseif ($tijd >  "18:00" && $tijd < "00:00"){
			echo '<p class="tijdstip">Goede Avond!</p>';
			echo '<p class="tijd">Het is nu '.$tijd.'</p>';
			echo '<body style="background-image: url(./backgrounds/evening.png)"';
		}
		elseif ($tijd >  "00:00" && $tijd < "06:00"){
			echo '<p class="tijdstip">Goede Nacht!</p>';
			echo '<p class="tijd">Het is nu '.$tijd.'</p>';
			echo '<body style="background-image: url(./backgrounds/night.png)"';
		}

	?>
<!DOCTYPE html>	<!-- hier begint de HTML -->
<html lang="nl">
<head>
	<meta http-equiv="refresh" content="1">	<!-- hier geef ik aan dat de pagina om de seconde moet refreshen -->
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Hoe laat is het?</title>
</head>
<body>

</body>
</html>