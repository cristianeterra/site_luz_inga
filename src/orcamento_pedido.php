<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  header('location:index.php');
}
?>

<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Luz Ingá</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="page.php">
          <img src="./assets/images/logo.png" alt="logo" width="80" height="80" class="d-inline-block align-text-top">
        </a>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="page.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="produtos.php">Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sobre.html">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contato.html">Contato</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="fazer_logout.php">Logout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="alterar.php">Cadastro</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <h1>Solicite o seu orçamento</h1>
      <div>Preencha o cadastro abaixo para solicitar o seu orçamento.<br>Responderemos em até 24h!</div>
      <br>
      <form action="solicitar_orcamento.php" method="post">
        <div class="mb-3">
          <label for="descricao" class="form-label">Descrição do orçamento</label>
          <input class="form-control" name="descricao">
        </div>
        <button type="submit" class="btn btn-primary">Solicitar</button>
      </form>
    </div>
    <center>
      <footer>
        <p>Luz Ingá<br>
        <a href="mailto:contato@luzinga.com.br">contato@luzinga.com.br</a></p>
        <div>Tel.: +55 (11) 4444-4444</div>
        <div>Horários: de 10h as 20h</div>
        <img src="./assets/images/facebook.png" width="30" height="30" class="d-inline-block align-text-top">
        <img src="./assets/images/instagram.png" width="30" height="30" class="d-inline-block align-text-top">
        <img src="./assets/images/youtube.png" width="30" height="30" class="d-inline-block align-text-top">
        <img src="./assets/images/linkedin.png" width="30" height="30" class="d-inline-block align-text-top">
        </footer>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>