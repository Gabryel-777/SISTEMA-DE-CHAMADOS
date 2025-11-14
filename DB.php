<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "gms";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
?>
