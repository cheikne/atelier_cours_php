<!DOCTYPE html>
<html>
	<head>
		<title>Test des exemple du TP</title>
		 <meta charset="utf-8">
 	 	<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>
	<body>
		<form action="note_etd.php" method="POST">
			<div class=" contain" style="position: absolute;left:30%;top:10%;padding: 60px;border: 1px solid black;">
				<table>
					<tr>
						<td><label>Identifiant   </label></td>
						<td><input type="text" name="ident"></td>
					</tr>
					<tr>
						<td><label>Password   </label></td>
						<td><input type="password"  name="passwd"></td>
					</tr>
				</table><br><br>
				<div style="margin-left: 50%;">
					<button style="background-color: black;font-family: sans-serif;font-weight: bold; color: white;">Annuler</button>
					<button id="display_modal" style="background-color: black;font-family: sans-serif;font-weight: bold; color: white;">Resultat</button>
					<div id="modal"></div>
				</div>
			</div>
		</form>
	</body>
</html>