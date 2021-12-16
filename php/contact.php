<?php
 $content=\file_get_contents('data/contact.yaml');
 $data=yaml_parse($content);


echo '<div class="">'; 
    echo'<div class="contact2">';
        echo '<h2>'.$data['titre'].'</h2>';
        echo'<form action="index.php#contact" method="post">';
            echo'<p>'.$data['nom'].'</p>';
            echo'<input class="champ2" type="text" name="nom" placeholder="Entrez votre nom de famille">';
            echo'<p>'.$data['mail'].'</p>';
            echo '<input class="champ2" type="email" name="mail" placeholder="Entrez l\'email ">';
            echo '<p>'.$data['objet'].'</p>';
            echo'<input class="champ2" type="text" name="objet" placeholder="Entrez l\'objet ">';
            echo'<p>'.$data['contenu'].'</p>';
            echo'<textarea rows="8" cols="81" name="form" placeholder="Entrez le contenu de votre mail"></textarea>';
            echo'<br>';
            echo'<div class="g-recaptcha" data-sitekey="6LfwGpIUAAAAAB_BNNxwXpr7MunyPbG2izN6WOLE"></div>';
            echo'<input class="champ" type="submit" value="Envoyez">';
        echo'</form>';
    echo'</div>';
echo'</div>';   


