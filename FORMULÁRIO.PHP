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
  <title>Criar Chamado</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="bg">

<button class="menu-btn" onclick="toggleMenu()">☰ Menu</button>
<div class="menu" id="menu">
  <button onclick="toggleMenu()">Fechar Menu</button>
  <button onclick="window.location.href='home.php'">Home</button>
  <img src="img/gms.png" class="menu-logo">
</div>

<div class="chamado-container">
  <h2>Criar Chamado</h2>

  <form action="salvar_chamado.php" method="POST">
    <textarea name="descricao" placeholder="Descreva seu chamado..." required></textarea>

    <div class="format-btns">
      <button type="button"><b>B</b></button>
      <button type="button"><i>I</i></button>
    </div>

    <button class="btn-enviar" type="submit">Enviar Chamado</button>
  </form>
</div>

<script src="script.js"></script>
</body>
</html>
