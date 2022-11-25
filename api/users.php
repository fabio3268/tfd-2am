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

while ($row = $stmt->fetch()){
    var_dump($row);
}

//var_dump($row, $row["name"],  $row["email"]); // array
//$query = "INSERT INTO users VALUES (NULL, 'Hagata', 'hagata@gmail.com','12345678','C')";
//$stmt = $conn->query($query);

$query = "SELECT * 
          FROM users 
          WHERE email LIKE 'hagata@gmail.com' AND password LIKE '12345678'";
$stmt = $conn->query($query);
var_dump($stmt->rowCount());

if($stmt->rowCount() == 1){
    $row = $stmt->fetch();
    echo "Olá, {$row->name}!";
    //var_dump($row);
} else {
    echo "E-mail e/ou Senha não cadastrados!";
}