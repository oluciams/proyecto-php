<?php

session_start();

if($_POST) {
  if(($_POST["user"] == "olgaphp") && ($_POST["password"] == "123456")) {

    $_SESSION["user"] = "olgaphp";

    header("location:index.php");

  } else {
    echo "<script> alert('Usuario o contraseña incorecta'); </script>";
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div class="container">

    <div class="row">
      <div class="col-md-4">

      </div>
      <div class="col-md-4">
      <br>
        <div class="card">
        <div class="card-header">
          Iniciar Sesión
        </div>
        <div class="card-body">
          <form action="login.php" method="post">
            Usuario:
            <input class="form-control" type="text" name="user">
            <br>
            constraseña:
            <input class="form-control" type="password" name="password">
            <br>
            <button class="btn btn-success" type="sumit">Entrar al portafolio </button>
            <br>
          </form>
        </div>
        <div class="card-footer text-muted">
        </div>
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>