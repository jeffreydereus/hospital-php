<?php

require(ROOT . "model/ClientModel.php");

function index()
{
	render("pages/index", array(
		'clients' => getAllClients(),
        'patients' => getAllPatients(),
        'species' => getAllSpecies(),
        'joined' => joinTables()
	));
}
