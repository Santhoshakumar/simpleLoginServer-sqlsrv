<?php
  include("auth.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="form">
      <p>Bem-Vindo <?php echo $_SESSION['username']; ?>!</p>
      <p>Essa é uma Area Segura.</p>
      <p><a href="dashboard.php">Mural</a></p>
      <a href="logout.php">Desconectar</a>
    </div>
  </body>
</html>
