<?php
$data=yaml_parse_file('data/compétence.yaml');

	echo "<section id='competence'>";

        echo"<h1>Mes compétences</h1>";

            echo'<article>';

                echo"<div id='compétenceDiv1'>";

                    echo"<h3>Developpement:</h3>";
                        echo '<label for="file">HTML:</label>'.'<br>';
                            echo '<progress id="file" max="100" value="60"> 600% </progress>'.'<br>';
                        echo '<label for="file">PHP :</label>'.'<br>';
                            echo '<progress id="file" max="100" value="40"> 40% </progress>'.'<br>';
                        echo '<label for="file">CSS :</label>'.'<br>';
                            echo '<progress id="file" max="100" value="50"> 50% </progress>'.'<br>';
                                echo '<label for="file">Linux</label>'.'<br>';
                    echo '<progress id="file" max="100" value="70"> 70% </progress>'.'<br>';

                echo"</div>";

                echo"<div id='compétenceDiv2'>";
                    echo"<h3>Réseaux:</h3>";
                        echo '<label for="file">Cisco :</label>'.'<br>';
                            echo '<progress id="file" max="100" value="70"> 70% </progress>'.'<br>';
                        echo '<label for="file">Linux:</label>'.'<br>';
                            echo '<progress id="file" max="100" value="70"> 70% </progress>';
                echo"</div>";

                echo"<div id='compétenceDiv3'>";
                    echo"<h3>langues :</h3>";
                        echo '<label for="file">Anglais</label>'.'<br>';
                            echo '<progress id="file" max="100" value="30"> 30% </progress>'.'<br>';
                        echo '<label for="file">Espagnol</label>'.'<br>';
                            echo '<progress id="file" max="100" value="40"> 40% </progress>'.'<br>';
                        echo '<label for="file">Français</label>'.'<br>';
                            echo '<progress id="file" max="100" value="99"> 99% </progress>'.'<br>';
                echo"</div>";
            echo'</article>';
    echo "</section>";
    

?>
