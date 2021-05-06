<!DOCTYPE html>
<html>
	<head>
		<title>Resultat etdudiant</title>
	</head>
	<body>
		<?php
			// global $index=0;
			// function addEtudiant_in_session($id_etd,$not_etd){
			// 	$_SESSION[$id_etd] = $not_etd;
			// }
			// function increment(){
			// 	$_SESSION["indice"] = ++$_SESSION["indice"];
			// }
			session_start();
			// $etd  = array();
			// $etd[0] = $_POST["nom"];$etd[1]=$_POST["maths"];$etd[2]=$_POST["infor"];
			// $id_etd = $_POST["sess"];
			// echo "<h1>la valeur de etd est : ".$id_etd."</h2>";
			// addEtudiant_in_session($id_etd,$etd);
			// $_SESSION["user"] = "kane";
			// $_SESSION["mail"] = "kane.cheickne@gmail.com";
			// $_SESSION["user"] = "Diallo";
			// header("Location:Test_login_etd.php")
			echo  $_POST["nom"];
			$_SESSION["nom"][]  = $_POST["nom"];
			$_SESSION["maths"][] = $_POST["maths"];
			$_SESSION["infor"][] = $_POST["infor"];
			$str = $_SESSION["nom"];
			echo "fhfhfh".strlen($_SESSION["nom"]);
			for ($i=0; $i < strlen($_SESSION["nom"]); $i++) { 
			
				echo "<p>".$_SESSION["nom"][$i]."</p>";
			} 
			?>
		<!-- <h1>fjfkfkfkfkfkffk</h1> -->
	</body>
</html>