<!DOCTYPE html>
<html>
	<head>
		<title>Test des exemple du TP</title>
		 <!-- <meta charset="utf-8"> -->
	</head>
	<body>
		<?php 
			if($_POST["ident"] != "ident" or $_POST["passwd"] !="passwd"){
				echo "<script>alert('Mot de passe ou Identifiant incorrecte.!')</script>";
				header("Location:index.php");
			}
		?>
		<form action="resultat_etd.php" method="POST">
			<div class=" contain" style="position: absolute;left:30%;top:10%;padding: 60px;border: 1px solid black;">
				<table>
					<tr>
						<td><label>Etudiant   </label></td>
						<td><input type="text" name="nom"></td>
					</tr>
					<tr>
						<td><label>Maths   </label></td>
						<td><input type="number"  name="maths"></td>
					</tr>
					<tr>
						<td><label>Informatique   </label></td>
						<td><input type="number"  name="infor"></td>
						<td><input type="text"  id="demo" name="sess" value="blablabla" style="display: none;"></td>
					</tr>
				</table><br><br>
				<div style="margin-left: 50%;">
					<button style="background-color: black;font-family: sans-serif;font-weight: bold; color: white;">Annuler</button>
					<button id="display_modal" style="background-color: black;font-family: sans-serif;font-weight: bold; color: white;">Resultat</button>
					<div id="modal"></div>
				</div>
			</div>
		</form>
		<script type="text/javascript">
			// var num = Math.random()*(50)+1;
			var incr = (function () {
			    var i = 1;

			    return function () {
			        return i++;
			    }
			})();
			var num = incr();
			document.getElementById('demo').value = "etd"+num;

		</script>
	</body>
</html>