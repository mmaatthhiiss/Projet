<?php 

$formation=yaml_parse_file('data/formation.yaml');

echo "<section id='formation'>";
echo"<h1>Mes formations</h1>";
foreach($formation AS $uneFormation){
	
		echo $uneFormation["nom"]."<br>";
		echo $uneFormation["etablissement"]."<br>";
		echo $uneFormation["dateDebut"]."<br>";
		echo $uneFormation["dateFin"]."<br>";
		echo $uneFormation["Lieu"]."<br>";
		echo $uneFormation["Contenu"]."<br>";
	
}
echo"</section>";

/*
	echo "<section id='formation'>";
		echo"<h1>Mes formations</h1>";
			echo $formation["1"]["nom"]."<br>";
			echo $formation["1"]["etablissement"]."<br>";
			echo $formation["1"]["dateDebut"]."<br>";
			echo $formation["1"]["dateFin"]."<br>";
			echo $formation["1"]["Lieu"]."<br>";
			echo $formation["1"]["Contenu"]."<br>";
	echo"</section>";

	echo "<section>";
			echo $formation["2"]["nom"]."<br>";
			echo $formation["2"]["etablissement"]."<br>";
			echo $formation["2"]["dateDebut"]."<br>";
			echo $formation["2"]["dateFin"]."<br>";
			echo $formation["2"]["Lieu"]."<br>";
			echo $formation["2"]["Contenu"]."<br>";
	echo"</section>";

	echo "<section>";
		echo $formation["3"]["nom"]."<br>";
		echo $formation["3"]["etablissement"]."<br>";
		echo $formation["3"]["dateDebut"]."<br>";
		echo $formation["3"]["dateFin"]."<br>";
		echo $formation["3"]["Lieu"]."<br>";
		echo $formation["3"]["Contenu"]."<br>";
echo"</section>";

*/

