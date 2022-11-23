<?php
echo "Olá Users!";

$host = "localhost";
$user = "root";
$password = "";
$database = "bd-clinica";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

$conn = new PDO(
    "mysql:host=$host;dbname=$database",
    $user,
    $password,
    $options
);

$stmt = $conn->query("SELECT * FROM users");
$row = $stmt->fetch();
var_dump($row);
var_dump($row["name"]);
