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

function screate(){
    render("pages/screate");
}


function create(){
    $desc = $_POST["species_desc"];
    Species_create($desc);
}

function delete($Sid){
    species_delete($Sid);
}

function changeSpecie($SID){
    render("pages/changespecie", array(
        'species' => getSpecieInfo($SID)
    ));
}

function saveToDB($SID){
    $Data = array($_POST["Sdesc"], $SID);
    UpdateSpecieInDB($Data);
}