<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
    <?php include "includes/menu.php"; ?>
    
  </div>
</nav>

<div class="container">
  <div class="row">

    <?php 

      if (isset($_GET["action"])){
        if ($_GET["action"] == "terminarSessao"){
          // remove all session variables
          session_unset();
          // destroy the session
          session_destroy();

          $msg = "Sessão terminada";
        }
      }

      if (isset($_POST["btnEntrar"])){

        $utilizador = "";
        $password = "";

        if (isset($_POST["txtUtilizador"])){
          $utilizador = $_POST["txtUtilizador"];
        }

        if (isset($_POST["txtPassword"])){
          $password = $_POST["txtPassword"];
        }

        if ($utilizador == "teste" && $password == "teste"){
          $_SESSION["utilizador"] = $utilizador;
          $msg = "Login com sucesso";
        } else {
          $msg = "Ocorreu um erro no login";
        }

      }
    ?>


    <?php if (!isset($_SESSION["utilizador"])) { ?>

      <div class="col-md-12">
        <h1>LOGIN</h1>
      </div>

      <form method="POST">

        <div class="col-md-12">
          <div class="form-group">
            <label for="txtUtilizador">Utilizador</label>
            <input type="text" class="form-control" name="txtUtilizador" />
          </div>
        </div>

        <div class="col-md-12">
          <div class="form-group">
            <label for="txtPassword">Password</label>
            <input type="password" class="form-control" name="txtPassword" />
          </div>
        </div>

        <div class="col-md-12">
          <input type="submit" class="btn btn-primary" value="Entrar" name="btnEntrar" />
        </div>

      </form>

    <?php } else { ?>

      <div class="col-md-12">
        <h1>DADOS PESSOAIS</h1>
      </div>

      <div class="col-md-12">
        <p>Bem vindo <?php echo $_SESSION["utilizador"] ?></p>
        <p><a href="login.php?action=terminarSessao">Terminar Sessão</a></p>
      </div>

    <?php } ?>

  </div>
</div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>