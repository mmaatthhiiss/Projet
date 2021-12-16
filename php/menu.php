<?php
$data=yaml_parse_file('data/menu.yaml');

    foreach ($data as $cle=>$menu){
     echo '<a href="#'.$cle.'">'.$menu.'</a>';
    }
?>