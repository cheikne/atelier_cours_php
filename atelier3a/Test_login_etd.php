<!DOCTYPE html>
<html>
	<head>
		<title>Test login</title>
	</head>
	<body>
		<?php 
			// if($_POST["ident"] == "ident" and $_POST["passwd"] =="passwd")
			// 	header("Location:note_etd.php");
			// else{
			// 	echo "<script>alert('Mot de passe ou Identifiant incorrecte.!')</script>";
			// 	header("Location:index.php");
			// }
		setcookie("lang","en",time()+3600*3);
		$a =6;
		$c=2;
		$b = 4;
		$tab = array("dhdh","kane",5=>"salif");
		var_dump($tab);
		echo "la valeur de tableau est :".$tab[4]."<br>";
		
		function somme(){
			global $c;
			$GLOBALS["a"] = $GLOBALS["b"] + $GLOBALS["c"];
			echo "la valeur de a est :".$GLOBALS['a']."<br>";
			$c = 45;
		}
		somme();
		echo "la valeur de a est :".$a."<br>";
		echo "la valeur de a est :".$c."<br>";
		?>
		<p>le cookie est :<?php echo htmlspecialchars($_COOKIE['lang'])?></p>
	</body>
</html>