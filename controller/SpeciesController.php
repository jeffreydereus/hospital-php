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
    render("pages/index", array(
        'clients' => getAllClients(),
        'patients' => getAllPatients(),
        'species' => getAllSpecies(),
        'joined' => Sortedtables($sid)

    ));
}

function create(){
    Species_create();
}