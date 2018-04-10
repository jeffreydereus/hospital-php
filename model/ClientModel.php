<?php

//Get related functions:

function getAllClients()
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM clients";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}
function getAllPatients()
{
    $db = openDatabaseConnection();

    $sql = "SELECT * FROM patients";
    $query = $db->prepare($sql);
    $query->execute();

    $db = null;

    return $query->fetchAll();
}
function getAllSpecies()
{
    $db = openDatabaseConnection();

    $sql = "SELECT * FROM species";
    $query = $db->prepare($sql);
    $query->execute();

    $db = null;

    return $query->fetchAll();
}
function joinTables(){

    $db = openDatabaseConnection();

    $sql = "SELECT * FROM ((clients INNER JOIN patients ON clients.client_id=patients.client_id) INNER JOIN species ON patients.species_id=species.species_id)";
    $query = $db->prepare($sql);
    $query->execute();

    $db = null;
    return $query->fetchAll();

}

function Sortedtables($sid){

    $db = openDatabaseConnection();

    $sql = "SELECT * FROM ((clients INNER JOIN patients ON clients.client_id=patients.client_id) INNER JOIN species ON patients.species_id=species.species_id) WHERE species.species_id = $sid";
    $query = $db->prepare($sql);
    $query->execute();

    $db = null;
    return $query->fetchAll();

}

function species_create(){
    $db = openDatabaseConnection();
    $sql = "INSERT INTO species (species_description)"
}


function species_delete($Sid){
    $db = openDatabaseConnection();
    $sql = "DELETE FROM species WHERE species_id = $Sid";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
    //header('location:' . URL . "patients/index");
    return;
}


