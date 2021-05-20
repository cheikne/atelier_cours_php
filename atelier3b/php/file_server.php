<?php 
	class Etudiant{
		public $nom;
		public $info;
		public $maths;
		function setEtudiant($name,$mat,$inf){
			$this->nom = $name;
			$this->maths = $mat;
			$this->info = $inf;
			// echo "<p>Nom de l'etudiant est :". $this->$nom."</p>";
			// echo "<p>Note de l'informatique est : ".$this->$info."</p>";
			// echo "<p>Note de mathematique : ".$this->$maths."</p>";
		}
		function affiche(){
			echo "<p>Nom de l'etudiant est :". $this->nom."</p>";
			echo "<p>Note de l'informatique est : ".$this->info."</p>";
			echo "<p>Note de mathematique : ".$this->maths."</p>";
		}
	}
	$rec = $_POST["record"];
	if($rec=="true"){
		$etd = new Etudiant();
		$etd->setEtudiant($_POST["ident"],$_POST["maths"],$_POST["info"]);
		$file = fopen("note_etud.txt","a");
		$text = $etd->nom.";".$etd->maths.";".$etd->info."\n";
		fwrite($file,$text);
		fclose($file);
		echo "<h2>Vous avez demadez d'enregistrer votre notes.</h2>";
		// echo "<h2>Record : ".$_POST["record"] ."</h2>";
	}
	else{
		echo "<h2>Votre notes ne sera pas enregistre.</h2>";
	}
 ?>