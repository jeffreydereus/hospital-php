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
    $data = array($_POST["firstName"], $_POST["lastName"]);
    var_dump($data);
    SaveClientToDB($data);
}