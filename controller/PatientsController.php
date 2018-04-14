<?php

require(ROOT . "model/ClientModel.php");

function index()
{
	render("pages/index", array(
        'joined' => joinTables()
	));
}

function PatientCreationPage(){
    render("pages/CreatePatient", array(
        'clients' => getAllClients(),
        'species' => getAllSpecies(),
        'joined' => joinTables()
));
}

function delete($pid){
    DeletePatient($pid);
}

function CreatePatient(){
    $Data = array($_POST["PatientName"], $_POST["PatientStatus"], $_POST["Gender"], $_POST["Specie"], $_POST["Client"]);
    CreatePatientInDB($Data);
}
