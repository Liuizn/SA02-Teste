<?php
session_start();
?>
<html>

<head>
  <meta charset="utf-8" />
  <title>Suporte Já</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    .card-login {
      padding: 30px 0 0 0;
      width: 350px;
      margin: 0 auto;
    }
  </style>
</head>

<body class="bg-">

  <nav class="navbar navbar-dark bg-danger">
    <a class="navbar-brand" href="#">
      <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      Suporte já
    </a>
  </nav>

  <div class="container">
    <div class="row mt-5 p-5">

      <div class="card-login w-25 mt-5">
        <div class="card w-5">
          <div class="card-header bg-danger text-center text-light">Login</div>
          <div class="card-body">
            <form action="valida_login.php" method="post">
              <?php if(isset($_GET['login'])&& $_GET['login'] == 'erro') { ?>

              <div class="text-danger text-center">
                <p>Usuário ou Senha inválido(s)</p>
              </div>

              <?php } ?>
              <?php if(isset($_GET['login'])&& $_GET['login'] == 'erro2') { ?>

              <div class="text-danger text-center">
                <p>Faça o Login.</p>
              </div>

              <?php } ?>
              <div class="form-group">
                <input name="email" type="email" class="form-control text-center" placeholder="E-mail">
              </div>
              <div class="form-group">
                <input name="senha" type="password" class="form-control text-center" placeholder="Senha">
              </div>





              <button class="btn btn-lg btn-info btn-block bg-success" type="submit">Entrar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</body>

</html>