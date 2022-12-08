<?php
session_start();
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


$email = $_POST["email"];
$password = $_POST["password"];

$query = "SELECT * 
          FROM users 
          WHERE email LIKE '$email' AND 
                password LIKE '$password'";

$stmt = $conn->query($query);

if($stmt->rowCount() == 1){
    $row = $stmt->fetch();
    $_SESSION["id"] = $row->id;
    $_SESSION["name"] = $row->name;
    $_SESSION["email"] = $row->email;
    $response = [
        "type" => "success",
        "message" => "Olá, {$row->name}! "
    ];
    echo json_encode($response);
} else{

    $response = [
        "type" => "error",
        "message" => "Email ou Senha não cadastrados"
    ];
    echo json_encode($response);
}