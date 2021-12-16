<?php 

$data=yaml_parse_file('data/formation.yaml');


foreach($data as $formation){
	echo "<section id='formation'>";
		echo"<h1>Mes formations</h1>";
			echo $formation["nom"]."<br>";
			echo $formation["etablissement"]."<br>";
			echo $formation["dateDebut"]."<br>";
			echo $formation["dateFin"]."<br>";
			echo $formation["Lieu"]."<br>";
			echo $formation["Contenu"]."<br>";
	echo"</section>";
}
