<?php
require(ROOT . "model/ClientModel.php");

function ClientPage()
{
    render("pages/ClientPage", array(
        'clients' => getAllClients()
    ));
}
function ClientCreationPage(){
    render("pages/CreateClient");
}

function CreateClientInDB(){
    $data = array($_POST["firstName"], $_POST["lastName"], $_POST["Email"], $_POST["Phone"]);
    var_dump($data);
    SaveClientToDB($data);
}

function delete($CID) {
    DeleteClientInDB($CID);
}

function editPage($CID){
    render("pages/EditClient", array(
        'clients' => GetClientInfo($CID)
    ));
}

function edit($CID){
    $data = array($_POST["firstname"], $_POST["lastname"], $_POST["email"], $_POST["phone"]);
    UpdateClientInDB($data, $CID);
}