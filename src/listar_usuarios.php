<?php

$conn = new mysqli('mysql', 'root', 'eusouasenha', 'luz_inga_dev');
if($conn){
  $sql = "SELECT `nome` FROM usuario";
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
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
        <a class="navbar-brand" href="index.php">
          <img src="./assets/images/logo.png" alt="logo" width="80" height="80" class="d-inline-block align-text-top">
        </a>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="produtos.html">Produtos</a>
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
        </ul>
      </div>
    </nav>

    <div class="container">
      <h3>Lista de Usuários cadastrados</h3>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Usuários</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>

        <?php
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<tr><th> ". $row["nome"]."</th><td>DELETE</td></tr>";
          }
        } else {
          echo "0 results";
        }
        mysqli_close($conn);
        ?>
          
        </tbody>
      </table>
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