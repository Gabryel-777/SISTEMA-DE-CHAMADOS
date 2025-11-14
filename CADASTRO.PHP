<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro GMS</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="bg">

  <div class="cadastro-container">
    <img src="img/RIGBY DI OCULOS.png" class="avatar">

    <form method="POST">
      <div class="input-box">
        <input type="text" name="nome" placeholder="Nome completo" required>
      </div>

      <div class="input-box">
        <input type="email" name="email" placeholder="Email" required>
      </div>

      <div class="input-box">
        <input type="password" name="senha" placeholder="Senha" required>
      </div>

      <div class="input-box">
        <input type="password" name="confirmar" placeholder="Confirmar senha" required>
      </div>

      <button class="btn-login" type="submit">Cadastrar</button>
    </form>

    <img src="img/gms.png" class="logo-gms">
  </div>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "db.php";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confirmar = $_POST["confirmar"];

    if ($senha != $confirmar) {
        echo "<script>alert('As senhas não coincidem!');</script>";
        exit;
    }

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senhaHash')";

    if ($conn->query($sql)) {
        echo "<script>alert('Cadastro realizado!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar');</script>";
    }
}
?>
