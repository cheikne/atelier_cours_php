<?php
		if(!$fop = fopen("note_etud.txt","r")){
			echo "<h2>Impossible d'ouvir le fichier.</h2>";
			exit();
		}
		echo " <div class='container'>";
		echo "<table class='table table-hover'>";
		 echo "<thead>";
		 echo "<tr>";
		 echo "<th>Nom</th>";
		 echo "<th>Maths</th>";
		 echo "<th>Informatique</th>";
		 echo "<th>Moyenne</th>";
		 echo "<th>Mention</th>";
		 echo "<th>Action</th>";
		 echo "</tr>";
		 echo "</thead>";
		echo "<tbody>";
		while(!feof($fop)) { 
			$line = fgets($fop,255);
			if(!feof($fop)){
				$separator = explode(";",$line,4);
				$moyen = (floatval($separator[1])+floatval($separator[2]))/2;
				echo " <tr>";
		        echo "<td>".$separator[0]."</td>";
		        echo " <td>".$separator[1]."</td>";
		        echo "<td>".$separator[2]."</td>";
		        echo "<td>".$moyen."</td>";
		        echo "<td>Assez-Bien</td>";
		        echo "<td>";
		        echo "<td>";
		        echo "<th><button>Modifier</button></th>";
		        echo "<th><button>Supprimer</button></th>";
		        echo "</td>";
		        echo "</td>";
			    echo "</tr>";
			}
		}
		echo "</tbody>";
		echo "</table>";
		echo "</div>";
	fclose($fop);
?>