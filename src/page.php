<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  header('location:page.php');
}

$conn = new mysqli('mysql', 'root', 'eusouasenha', 'luz_inga_dev');
if($conn){
  $sql = "SELECT `nome` FROM usuario";
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  } 
}
mysqli_close($conn);
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
            <a class="nav-link" href="page.php">Home</a>
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
            <a class="nav-link  active" href="alterar.php">Cadastro</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container">
      <center>
      <h5>Login efetuado com sucesso!</h5>
      <div><p>Agora você pode adicionar produtos à sua lista de desejos,<br>solicitar orçamento, e inscrever-se nas nossas promoções!</p></div>
      </center>
      <h1>Luz Ingá</h1>
      <div>Iluminação e decoração de ambientes com modernidade e sofisticação.</div>
      <br><br>
      <center>
      <div id="demo" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./assets/images/1.png" alt="Los Angeles" class="d-block">
          </div>
          <div class="carousel-item">
            <img src="./assets/images/2.png" alt="Chicago" class="d-block">
          </div>
          <div class="carousel-item">
            <img src="./assets/images/3.png" alt="New York" class="d-block">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
      </center>
      <br><br>
      <div class="card">
        <div class="card-header">
          Fique por dentro das nossas promoções!
        </div>
        <div class="card-body">
          <h5 class="card-title">PROMOÇÃO</h5>
          <p class="card-text">Inscreva-se para receber as promoções dos nossos produtos!</p>
          <form action="receber_promocoes.php" method="post">
            <input hidden="true" class="form-control" name="id" value="<?php echo $_SESSION['usuario_id'] ?>">
            <button type="submit" class="btn btn-primary">Cadastrar-se</button><p></p>
          </form>
        </div>
      </div>
      <br>
      <div class="card">
        <div class="card-header">
          Solicite o seu orçamento!
        </div>
        <div class="card-body">
          <h5 class="card-title">Orçamento</h5>
          <p class="card-text">Receba o seu orçamento em até 24h</p>
          <a href="orcamento_pedido.php" class="btn btn-primary">Solicitar orçamento</a>
        </div>
      </div>
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