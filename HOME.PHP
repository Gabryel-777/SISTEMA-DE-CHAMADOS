<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Home - GMS</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="bg">

  <button class="menu-btn" onclick="toggleMenu()">☰ Menu</button>
  <div class="menu" id="menu">
    <button onclick="toggleMenu()">Fechar Menu</button>
    <button onclick="window.location.href='criar_chamado.php'">Novo Chamado</button>
    <button onclick="window.location.href='logout.php'">Sair</button>
    <img src="img/gms.png" class="menu-logo">
  </div>

  <div class="home-container">
    <h1>Bem-vindo, <?php echo $_SESSION["nome"]; ?>!</h1>
    <button class="btn-home" onclick="window.location.href='criar_chamado.php'">Criar Chamado</button>
    <img src="img/mordecai.png" class="avatar-home">
  </div>

<script src="script.js"></script>
</body>
</html>
