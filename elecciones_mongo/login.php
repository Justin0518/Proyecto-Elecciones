<?php include "./header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">

</head>
<body>


<div class="login-box">
  <h2>Inicia sesión para votar</h2>
  <form>
    <div class="user-box">
      <input type="text" name="cedula" required="">
      <label>Cédula</label>
    </div>
    <div class="user-box">
      <input type="password" name="pass" required="">
      <label>Contraseña</label>

    </div>

    <a href="index.php">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Ingresar
    </a>
    <a href="informes.php">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      ver informes
    </a>

  </form>
</div>

</body>

</html>