<?php
$data=yaml_parse_file('data/experience.yaml');


foreach($data as $experience){
   
	echo "<section id='experience'>";
        echo '<article>';
            echo"<h1>Mes expériences</h1>";
                echo $experience["Poste occupé"]."<br />";
                echo $experience["Entreprise"]."<br />";
                echo $experience["Date de début"]."<br />";
                echo $experience["Date de fin"]."<br />";
                echo $experience["lieu"]."<br />";
                echo $experience["tache"]."<br />";
        echo'</article>';
    echo "</section>";

}


