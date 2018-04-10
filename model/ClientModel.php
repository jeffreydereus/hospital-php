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

function SortedtablesWP($Pid){

    $db = openDatabaseConnection();

    $sql = "SELECT * FROM ((clients INNER JOIN patients ON clients.client_id=patients.client_id) INNER JOIN species ON patients.species_id=species.species_id) WHERE patients.patient_id = $Pid";
    $query = $db->prepare($sql);
    $query->execute();

    $db = null;
    return $query->fetchAll();

}

function species_create($desc){
    $db = openDatabaseConnection();
    $sql = 'INSERT INTO species (species_description) VALUES(:species_desc )';
    $query = $db->prepare($sql);
    $query->bindParam(':species_desc', $desc, PDO::PARAM_STR);
    $query->execute();
    $db = null;
    header('location:' . URL . "Species/speciesPage");
    return;
}

function editPatient($Pname, $Pstatus, $PGender, $Pid, $Cid){
    $db = openDatabaseConnection();
    $sql = "UPDATE patients SET patient_name = :patient_name, patient_status = :patient_status, Gender = :Gender, client_id = :Cid WHERE patient_id = $Pid";
    $query = $db->prepare($sql);
    $query-> bindParam(':patient_name', $Pname, PDO::PARAM_STR);
    $query-> bindParam(':patient_status', $Pstatus, PDO::PARAM_STR);
    $query-> bindParam(':Gender', $PGender, PDO::PARAM_STR);
    $query-> bindParam(':Cid', $Cid, PDO::PARAM_INT);
    $query->execute();
    header('location:' . URL . 'patients/index');
    return;
}



