<h1>Dier soorten</h1>


<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Specie</th>
        <th>Action</th>
    </tr>

    </thead>
    <tbody>

<?php
$page = "species/screate";
foreach ($species as $specie => $value){
    echo '<tr><td class="td">' . $value['species_id'] . '</td><td class="td">' . $value['species_description'] . '</td><td class="td"><a href="' . URL . 'species/delete/' . $value["species_id"] . '">Delete</a> <a href="' . URL . 'species/changespecie/' . $value["species_id"] . '">Edit</a></td></tr>';
};
?>

    </tbody>
</table>
