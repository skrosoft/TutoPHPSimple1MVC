<?php

$page_title = 'Lista de usuario';

$user_list = array(
	array(
		'name' 		=> 'Vincent',
		'gender' 	=> 'M'
	),
	array(
		'name' 		=> 'Fabian',
		'gender' 	=> 'M'
	),
	array(
		'name' 		=> 'Randy',
		'gender' 	=> 'F'
	),
	array(
		'name' 		=> 'Israel',
		'gender' 	=> 'M'
	),
);

if (isset($_GET['format']) && $_GET['format'] == 'json'){
    header('content-type: application/json');
    echo json_encode($user_list);
    exit;
}

?>