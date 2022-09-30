<?php

session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  header('location:index.php');
}

$id = $_SESSION['usuario_id'];

$conn = new mysqli('mysql', 'root', 'eusouasenha', 'luz_inga_dev');
if($conn){
  $sql = "SELECT `receberpromocao`, `id`, `nome`, `email`, `telefone`, `endereco`, `cidade`, `login`, `senha` FROM `usuario` WHERE id = '$id'";
  $result = $conn->query($sql);
	while($row = $result -> fetch_assoc()){
    $receberpromocao = $row['receberpromocao'];
		$id = $row['id'];
		$nome = $row['nome'];
		$email = $row['email'];
    $telefone = $row['telefone'];
    $endereco = $row['endereco'];
    $cidade = $row['cidade'];
    $login = $row['login'];
		$senha = $row['senha'];
	}
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
            <a class="nav-link" href="page.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="produtos.html">Produtos</a>
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
            <a class="nav-link active" href="alterar.php">Cadastro</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <h1>Alterar cadastro</h1>
      <div>Preencha os campos abaixo para atualizar o seu cadastro</div>
      <br>
      <form action="alterar_cadastro.php" method="post">
        <input hidden="true" class="form-control" name="id" value="<?php echo $id ?>">
        <input hidden="true" class="form-control" name="receberpromocao" value="<?php echo $receberpromocao ?>">
        <div class="mb-3">
          <label for="nome" class="form-label">Nome</label>
          <input class="form-control" name="nome" value="<?php echo $nome ?>">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="<?php echo $email ?>">
          <div id="emailHelp" class="form-text">Não vamos compartilhar o seu e-mail.</div>
        </div>
        <div class="mb-3">
          <label for="telefone" class="form-label">Telefone</label>
          <input class="form-control" name="telefone"  value="<?php echo $telefone ?>">
        </div>
        <div class="mb-3">
          <label for="endereco" class="form-label">Endereço</label>
          <input class="form-control" name="endereco" value="<?php echo $endereco ?>">
        </div>
        <div class="mb-3">
          <label for="cidade" class="form-label">Cidade</label>
          <input class="form-control" name="cidade" value="<?php echo $cidade ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Nome do usuário:</label><br>
          <input type="text" name="login" value="<?php echo $login ?>"><br>
        </div>
        <div class="mb-3">
          <label class="form-label">Senha:</label><br>
          <input type="password" name="senha" value="<?php echo $senha ?>">
        </div>
        <button type="submit" value=logar class="btn btn-primary">Atualizar cadastro</button><p></p>
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