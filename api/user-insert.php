<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "bd-clinica";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
];

$conn = new PDO(
    "mysql:host=$host;dbname=$database",
    $user,
    $password,
    $options
);

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

$query = "INSERT INTO users VALUES (NULL, '$name', '$email','$password','C')";
$stmt = $conn->query($query);

/*$post = filter_input_array(INPUT_POST,FILTER_DEFAULT);

if(in_array("",$post)){
    echo "informe nome";
}*/

/*$response = [
    "type" => "success",
    "message" => "Usuário cadastrado com sucesso"
];
echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);*/