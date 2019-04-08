<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
		$mysqli = new mysqli('localhost', 'root', '', 'espace_membre');
		$mysqli->set_charset("utf8");
		$requete = 'SELECT * FROM membre ';
		$resultat = $mysqli->query($requete);
		while ($ligne = $resultat->fetch_assoc()) {
			echo $ligne['id'].' '.$ligne['firstname'].' '.$ligne['lastname'].' ';
			echo $ligne['lastname'].' '.$ligne['lastname'].'<br>';
		}
		$mysqli->close();
		?>
	</body> 
</html>