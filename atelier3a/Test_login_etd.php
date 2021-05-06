<!DOCTYPE html>
<html>
	<head>
		<title>Test login</title>
	</head>
	<body>
		<?php 
			session_start();
			// if($_POST["ident"] == "ident" and $_POST["passwd"] =="passwd")
			// 	header("Location:note_etd.php");
			// else{
			// 	echo "<script>alert('Mot de passe ou Identifiant incorrecte.!')</script>";
			// 	header("Location:index.php");
			// }
			$etd1 = $_SESSION["etd1"];
			$etd2 = $_SESSION["etd2"];
		echo "<h1>L' etudiant ".$etd1[0]." est ".$etd1[1]. "  ".$etd1[2]."</h1>";
		echo "<h1>L' etudiant ".$etd2[0]." est ".$etd2[1]. "  ".$etd2[2]."</h1>";
		// echo "<h1>Le mail de ".$_SESSION["etd1"]." est ".$_SESSION["etd2"]."</h1>"
		?>
	</body>
</html>