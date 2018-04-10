<h1>Dier soorten</h1>

<?php
$page = "species/screate";
foreach ($species as $specie => $value){
 echo "<h4><a href =" . URL . "species/Sorted/" . $value["species_id"] . ">". $value['species_description'] . "</a> <a class='red' href=" . URL . "species/delete/" . $value['species_id'] . ">x</a></h4><br>";
};
?>
