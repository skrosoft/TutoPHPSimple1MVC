<?php

$page_title = 'Lista de usuario';

Conexion::connect($config);

$user_list_result = mysqli_query(Conexion::$dblink, "SELECT * FROM usuario");

Conexion::disconnect();

if (isset($_GET['format']) && $_GET['format'] == 'json'){

    $user_list = array();
    while($row = mysqli_fetch_array($user_list_result, MYSQLI_ASSOC)){
        $user_list[] = $row;
    }

    header('content-type: application/json');
    echo json_encode($user_list);
    exit;
}

?>