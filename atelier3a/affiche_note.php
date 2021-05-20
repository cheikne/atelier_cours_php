<?php

session_start();
$s='S';
$m='M';
for($i=0;$i<count($_SESSION["nom"]);$i++){
    
    if(isset($_POST[$s.strval($i)])){
        array_splice($_SESSION['nom'], $i,1);
        array_splice($_SESSION['maths'], $i,1);
        array_splice($_SESSION['infor'], $i,1);

    }
    if(isset($_POST[$m.strval($i)])){
        $_SESSION['glob']=$i;
        header("Location:note_etd.php");
    } 
}
if(isset($_POST["create_nouveau_etd"])){
	header("Location:note_etd.php");
}
if(isset($_POST["choisi_etd"])){
	header("Location:note_etd.php");
}

function evaluation($moyen){
	if($moyen<10)
		return "Insuffisant";
	else if($moyen>=10 and $moyen <12)
		return "Passable";
	else if($moyen>=12 and $moyen <14)
		return "Assez-Bien";
	else if($moyen>=14 and $moyen <16)
		return "Bien";
	else if($moyen>=16 and $moyen <18)
		return "Tres_Bien";
	else if($moyen>=18)
		return "Excellent";
	

}

?>
<html>
	<head>
		<title>Resultat</title>
			  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	</head>
	<body>
		<form action="affiche_note.php" method="POST"><br>
			<button style="position: absolute;right: 0;" name="create_nouveau_etd">Nouveau</button>
			<button style="position: absolute;right:90px;" name="choisi_etd">Selection</button><br><br>
			<?php
				session_start();
				$etd_modif='M';
				$etd_supp='S';
				echo "<div class='container'>          
				  <table class='table table-dark'>
				    <thead>
				      <tr>
				        <th>Nom</th>
				        <th>Mathematique</th>
				        <th>Informatique</th>
				        <th>Moyenne</th>
				        <th>Mention</th>
				        <th>Action</th>
				      </tr>
				    </thead>
				    <tbody>";
				for ($i=0; $i < count($_SESSION["nom"]); $i++) { 
					$moy =($_SESSION["maths"][$i]+$_SESSION["maths"][$i])/2;
					echo "<tr>
				        <td>".$_SESSION["nom"][$i]."</td>
				        <td>".$_SESSION["maths"][$i]."</td>
				        <td>".$_SESSION["infor"][$i]."</td>
				        <td>".$moy."</td>
				        <td>".evaluation($moy)."</td>
				        <td>
				        <td><button name='".strval($etd_modif).$i."' onclick='myfuct()'>Modifier</button></td>	
				        <td><button name='".strval($etd_supp).$i."'>Suppression</button></td>	
				        </td>
				      </tr>";

					} 
				echo "  </table>
					</div>";
			?>
		</form>
		<script>
			// echo "document.getElementById('M1').addEventListener('click', function(event){
  	// 		event.preventDefault()
  			
			// 	});
		</script>
	</body>
</html>