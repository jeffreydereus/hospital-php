<?php

require(ROOT . "model/ClientModel.php");

function index()
{
	render("student/index", array(
		'clients' => getAllClients(),
        'patients' => getAllPatients(),
        'species' => getAllSpecies()
	));
}
