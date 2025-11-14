<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Login GMS</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="bg">

  <div class="login-container">
    <img src="img/mordecai.png" class="avatar">

    <form method="POST">
      <div class="input-box">
        <input type="email" name="email" placeholder="Email" required>
      </div>

      <div class="input-box">
        <input type="password" name="senha" placeholder="Password" required>
      </div>

      <div class="links">
        <a href="cadastro.php">Criar conta</a>
        <a href="#">Lembrar Senha</a>
      </div>

      <button class="btn-login" type="submit">LOGIN</button>
    </form>

    <img src="img/gms.png" class="logo-gms">
  </div>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "db.php";

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email='$email' LIMIT 1";
    $res = $conn->query($sql);

    if ($res->num_rows > 0) {
        $user = $res->fetch_assoc();

        if (password_verify($senha, $user['senha'])) {
            $_SESSION["id"] = $user["id"];
            $_SESSION["nome"] = $user["nome"];
            header("Location: home.php");
            exit;
        }
    }

    echo "<script>alert('Email ou senha incorretos');</script>";
}
?>
