<!DOCTYPE html>
<html>
	<head>
		<title>Resultat etdudiant</title>
	</head>
	<body>
		<?php
			static int $i=0;
			session_start()
			$etd  = array();
			$etd = array($_POST["ident"],$_POST["maths"],$_POST["infor"]);
			$_SESSION['res'] = "je suis la";
			echo "<h2>".$_SESSION["res"]."</h2>";
			echo "salut le omnde.";
		?>
		<h1>fjfkfkfkfkfkffk</h1>
	</body>
</html>