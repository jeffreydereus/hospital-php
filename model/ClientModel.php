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

function species_delete($Sid){
    $db = openDatabaseConnection();
    $sql = "DELETE FROM species WHERE species_id = $Sid";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
    header('location:' . URL . "Species/SpeciesPage");
    return;
}

function DeletePatient($pid){
    $db = openDatabaseConnection();
    $sql = "DELETE FROM patients WHERE patient_id = $pid";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
    header('location:' . URL . "patients/index");
    return;
}

function CreatePatientInDB($Data){
    $db = openDatabaseConnection();
    $sql = "INSERT INTO patients (patient_name, species_id, client_id, patient_status, Gender) VALUES (:patientname, :speciesid, :clientid, :patientstatus, :patientgender)";
    $query = $db->prepare($sql);
    $query->bindParam(':patientname', $Data[0], PDO::PARAM_STR);
    $query->bindParam(':speciesid', $Data[3], PDO::PARAM_INT);
    $query->bindParam(':clientid', $Data[4], PDO::PARAM_INT);
    $query->bindParam(':patientstatus', $Data[1], PDO::PARAM_STR);
    $query->bindParam(':patientgender', $Data[2], PDO::PARAM_STR);
    $query->execute();
    $db = null;
    header('Location:' . URL . "patients/index");
    return;
}

function SaveClientToDB($data){
    $db = openDatabaseConnection();
    $sql = "INSERT INTO clients (client_firstname, client_lastname, Email, Phone) VALUES (:firstname, :lastname, :email, :Phone)";
    $query = $db->prepare($sql);
    $query->bindParam(':firstname', $data[0], PDO::PARAM_STR);
    $query->bindParam(':lastname', $data[1], PDO::PARAM_STR);
    $query->bindParam(':email', $data[2], PDO::PARAM_STR);
    $query->bindParam(':Phone', $data[3], PDO::PARAM_INT);

    $query->execute();
    $db = null;
    header('location:' . URL . "clients/clientpage");
    return;
}

function DeleteClientInDB($CID){
    $db = openDatabaseConnection();
    $sql = "DELETE FROM clients WHERE client_id = $CID";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
    header('location:' . URL . "clients/clientpage");
    return;
}

function GetClientInfo($CID){
    $db = openDatabaseConnection();
    $sql = "SELECT * FROM clients WHERE client_id = $CID";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
    return $query->fetchAll();
}

function UpdateClientInDB($data, $CID){
    $db = openDatabaseConnection();
    $sql = "UPDATE clients SET client_firstname = :CFname, client_lastname = :CLname, Email = :email, Phone = :phone WHERE client_id = $CID";
    $query = $db->prepare($sql);
    $query->bindParam(':CFname', $data[0], PDO::PARAM_STR);
    $query->bindParam(':CLname', $data[1], PDO::PARAM_STR);
    $query->bindParam(':email', $data[2], PDO::PARAM_STR);
    $query->bindParam(':phone', $data[3], PDO::PARAM_INT);
    $query->execute();
    $db = null;
    header('location:' . URL . "clients/clientpage");
    return;
}

function getSpecieInfo($SID){
    $db = openDatabaseConnection();
    $sql = "SELECT * FROM species WHERE species_id = $SID";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
    return $query->fetchAll();
}


function UpdateSpecieInDB($Data){
    $db = openDatabaseConnection();
    $sql = "UPDATE species SET species_description = :sdesc WHERE species_id = :SID";
    $query = $db->prepare($sql);
    $query->bindParam(':sdesc', $Data[0], PDO::PARAM_STR);
    $query->bindParam(':SID', $Data[1], PDO::PARAM_INT);
    $query->execute();
    $db = null;
    header('location:' . URL . "species/speciespage");
    return;
}
