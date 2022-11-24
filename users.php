<?php
echo "Olá, Users!";
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

var_dump($conn);

$stmt = $conn->query("SELECT * FROM users");

var_dump($stmt);

$row = $stmt->fetch();
var_dump($row, $row->name, $row->id);
//var_dump($row, $row["name"], $row["email"]); // array
$row = $stmt->fetch();
var_dump($row, $row->name, $row->id);
//var_dump($row, $row["name"],  $row["email"]); // array
$query = "INSERT INTO users VALUES (NULL, 'Hagata', 'hagata@gmail.com','12345678','C')";
$stmt = $conn->query($query);








/*
$stmt = $conn->query("SELECT * FROM users");
$row = $stmt->fetch();
var_dump($row);
var_dump($row["name"]);
*/
