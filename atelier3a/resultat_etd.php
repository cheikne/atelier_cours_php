<!DOCTYPE html>
<html>
	<head>
		<title>Resultat etdudiant</title>
	</head>
	<body>
		<?php
			session_start();
			if(isset($_SESSION['glob'])){
				$i=$_SESSION['glob'];
				$_SESSION['nom'][$i] = $_POST["nom"];;
				$_SESSION['maths'][$i] = $_POST["maths"];
				$_SESSION['infor'][$i] = $_POST["infor"];
				unset($_SESSION['glob']);
				// echo  $_POST["nom"];
				header("Location:affiche_note.php");
			}else{
				$_SESSION["nom"][]  = $_POST["nom"];
				$_SESSION["maths"][] = $_POST["maths"];
				$_SESSION["infor"][] = $_POST["infor"];
				$str = $_SESSION["nom"];
				header("Location:affiche_note.php");
			}

			?>
	</body>
</html>