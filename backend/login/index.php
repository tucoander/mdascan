<?php

// headers para json api
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$response =  array();


if (!isset($_POST['user']) || !isset($_POST['password']) || empty($_POST['user']) || empty($_POST['password'])) {
    $response['data'] = $_POST;
    $response['message'] = 'Usuário ou senha são obrigatórios';

} else {
    if ($_POST['user'] === 'ander' && $_POST['password'] === 'ander') {
        $response['data'] = $_POST;
        $response['message'] = 'Ok';
    } else {
        $response['data'] = $_POST;
        $response['message'] = 'Usuário ou senha não confere ';
    }
}

echo json_encode($response);
