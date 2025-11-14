<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("Location: index.php");
    exit;
}

include "db.php";

$usuario = $_SESSION["id"];
$descricao = $_POST["descricao"];

$sql = "INSERT INTO chamados (usuario_id, descricao) VALUES ('$usuario', '$descricao')";

if ($conn->query($sql)) {
    echo "<script>alert('Chamado enviado!'); window.location='home.php';</script>";
} else {
    echo "<script>alert('Erro ao enviar chamado');</script>";
}
?>
