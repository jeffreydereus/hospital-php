<?php
require(ROOT . "model/ClientModel.php");


function SpeciesPage()
{
    render("pages/SpeciesPage", array(
      'species' => getAllSpecies()
    ));
}

function Sorted($sid)
{
    render("pages/sorted", array(
        'clients' => getAllClients(),
        'patients' => getAllPatients(),
        'species' => getAllSpecies(),
        'joined' => Sortedtables($sid)

    ));
}

function create(){
<<<<<<< Updated upstream
    Species_create();
=======
    $desc = $_POST["species_desc"];
    Species_create($desc);
}

function delete($Sid){
    species_delete($Sid);
}

function changeSpecie($Sid){
    render("pages/changespecie", array(
        'sid' => $Sid
    ));
>>>>>>> Stashed changes
}