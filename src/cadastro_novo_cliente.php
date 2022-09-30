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
        <a class="navbar-brand" href="index.php">
          <img src="./assets/images/logo.png" alt="logo" width="80" height="80" class="d-inline-block align-text-top">
        </a>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
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
            <a class="nav-link active" href="login.html">Login</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <h1>Cadastro</h1>
      <div>Preencha os campos abaixo para fazer o seu cadastro</div>
      <br>
      <form action="cadastrar_novo_cliente.php" method="post">
        <input hidden="true" class="form-control" name="receberpromocao" value="0">
        <div class="mb-3">
          <label for="nome" class="form-label">Nome</label>
          <input class="form-control" name="nome">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">Não vamos compartilhar o seu e-mail.</div>
        </div>
        <div class="mb-3">
          <label for="telefone" class="form-label">Telefone</label>
          <input class="form-control" name="telefone">
        </div>
        <div class="mb-3">
          <label for="endereco" class="form-label">Endereço</label>
          <input class="form-control" name="endereco">
        </div>
        <div class="mb-3">
          <label for="cidade" class="form-label">Cidade</label>
          <input class="form-control" name="cidade">
        </div>
        <div class="mb-3">
          <label class="form-label">Nome do usuário</label><br>
          <input type="text" name="login"><br>
        </div>
        <div class="mb-3">
          <label class="form-label">Senha</label><br>
          <input type="password" name="senha">
        </div>
        <button type="submit" value= logar class="btn btn-primary">Cadastrar-se</button><p></p>
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