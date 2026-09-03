<?php
include_once dirname(__DIR__ . '', 1) . "/models/petitions.php";

session_start();
date_default_timezone_set('America/Mexico_City');

if (!empty($_POST['mod'])) {
    $function = $_POST['mod'];
    $function();
}


function saveUser()
{
    
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $mail = $_POST['mail'];

    $queries = new Queries;

    $stmt = "INSERT INTO asteleco_test.users (
        id_users_status,
        name,
        lastname,
<<<<<<< HEAD
        addres,
=======
        address,
>>>>>>> main
        mail) 
        VALUES(
            1,
            '$name',
            '$lastname',
            '$address',
            '$mail'
        )";

    $insertData = $queries->InsertData($stmt);
    if (!empty($insertData)) {
        $last_id = $insertData['last_id'];

        //--- --- ---//
        $data = array(
            'response' => true,
            'idUser'                => $last_id,
            'message'  => 'registrado con exito'
        );
        //--- --- ---//
    } else {
        //--- --- ---//
        $data = array(
            'response' => false,
            'message'                => 'error no se registra'
        );
        //--- --- ---//
    }

    echo json_encode($data);
}
