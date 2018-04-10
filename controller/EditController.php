<?php

require(ROOT . "model/ClientModel.php");


function EditPage($Pid)
{
    render("pages/EditPatient", array(
        'clients' => getAllClients(),
        'patients' => getAllPatients(),
        'species' => getAllSpecies(),
        'Sorted' => SortedtablesWP($Pid),
        'pid' => $Pid
    ));
}

function EditInDB($pid) {
    $Pname = $_POST['pName'];
    $Pstatus = $_POST['pStatus'];
    $PGender = $_POST['pGender'];
    $Pid = $pid;
    $Cid = $_POST['form_client_id'];
    editPatient($Pname, $Pstatus, $PGender, $Pid, $Cid);
}