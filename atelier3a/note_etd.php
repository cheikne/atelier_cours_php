<?php 
	// if($_POST["ident"] != "ident" or $_POST["passwd"] !="passwd"){
	// 	echo "<script>alert('Mot de passe ou Identifiant incorrecte.!')</script>";
	// 	header("Location:index.php");
	// }
?>
<html>
	<head>
		<title>Test des exemple du TP</title>
		 <!-- <meta charset="utf-8"> -->
	</head>
	<body>
		<form action="resultat_etd.php" method="POST">
			<div class=" contain" style="position: absolute;left:30%;top:10%;padding: 60px;border: 1px solid black;">
		<?php
			session_start();
			  if(isset($_SESSION['glob'])){
                    $i=$_SESSION['glob'];
                    $name=$_SESSION['nom'][$i];
                    $maths=$_SESSION['maths'][$i];
                    $infor=$_SESSION['infor'][$i];
                    $_SESSION['glob'] = $i;
                    $p="value";
                }else{
                    $name="votre nom ici";
                    $maths="Note mathematique ici";
                    $infor="Note informatique ici";
                    $p="placeholder";
                }
                
			echo
				"<table>
					<tr>
						<td><label>Etudiant   </label></td>
						<td><input type='text' name='nom' ".$p."='".$name."'></td>
					</tr>
					<tr>
						<td><label>Maths   </label></td>
						<td><input type='number'  name='maths' ".$p."='".$maths."'></td>
					</tr>
					<tr>
						<td><label>Informatique   </label></td>
						<td><input type='number'  name='infor' ".$p."='".$infor."'></td>
					</tr>
				</table><br><br>";
		?>
				<div style="margin-left: 50%;">
					<button style="background-color: black;font-family: sans-serif;font-weight: bold; color: white;">Annuler</button>
					<button id="display_modal" style="background-color: black;font-family: sans-serif;font-weight: bold; color: white;">Resultat</button>
					<div id="modal"></div>
				</div>
			</div>
		</form>
	</body>
</html>