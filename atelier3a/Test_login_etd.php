<!DOCTYPE html>
<html>
	<head>
		<title>Test login</title>
	</head>
	<body>
		<?php 
			if($_POST["ident"] == "ident" and $_POST["passwd"] =="passwd")
				header("Location:note_etd.php");
			else{
				echo "<script>alert('Mot de passe ou Identifiant incorrecte.!')</script>";
				header("Location:index.php");
			}
		?>
	</body>
</html>