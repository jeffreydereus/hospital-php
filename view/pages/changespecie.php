<?php
    foreach ($species as $item => $value){
        echo '<form method="post" action="' . URL . 'species/saveToDB/' . $value["species_id"] . '">';
        echo '<p>Species naam: <input type="text" name="Sdesc" value="' . $value['species_description'] . '">';
        echo '<p><input type="submit"></p>';
    }
?>