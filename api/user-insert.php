<?php

echo "Olá, " . $_POST["name"];

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
