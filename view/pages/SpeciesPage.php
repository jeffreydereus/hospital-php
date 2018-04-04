<h1>Dier soorten</h1>

<?php
$page = "patients/screate";
foreach ($species as $specie => $value){
 echo "<h4><a href =" . URL . "species/Sorted/" . $value["species_id"] . ">". $value['species_description'] . "</h4>";
};
?>
