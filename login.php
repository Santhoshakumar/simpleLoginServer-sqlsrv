<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <?php
      require('db.php');
      session_start();
      if (isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $username = stripslashes($username);
        $password = stripslashes($password);
        $query = "SELECT * FROM users WHERE username='$username' and password= '".md5($password)."' ";
        $result = sqlsrv_query($conn, $query) or die( print_r( sqlsrv_errors(), true)) ;
        $rows = 0;
        while($row = sqlsrv_fetch_array($result)){
          $rows++;
        }
        if($rows==1){
          $_SESSION['username'] = $username;
          header("Location: index.php");
        }else{
          echo "<div class='form'> <h3>Nome/Senha Incorreto.</h3> <br/> <a href='login.php'>Login</a> </div>";
        }
      }else{
    ?>
    <div class="form">
      <h1>Login</h1>
      <form action="" method="post" name="login">
        <input type="text" name="username" placeholder="Nome" required />
        <input type="password" name="password" placeholder="Senha" required />
        <input name="submit" type="submit" value="Login" />
      </form>
      <p>Ainda não é Registrado? <a href='registration.php'>Se Registre Aqui</a></p>
    </div>
    <p> <a href='http://www.google.com'>Google</a> </p>
    <p> <a href='http://www.nba.com'>NBA</a> </p>
    <p> <a href='http://www.4chan.org'>4chan</a> </p>
    <p> <a href='http://www.lainchan.org'>Lainchan</a> </p>
    <?php
      }
    ?>
  </body>
</html>
