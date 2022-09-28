<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$cidade = $_POST["cidade"];
$login = $_POST['login'];
$senha = $_POST['senha'];

$conn = new mysqli('mysql', 'root', 'eusouasenha', 'luz_inga_dev');
if($conn){
  $sql = "INSERT INTO `usuario` (`nome`, `email`, `telefone`, `endereco`, `cidade`, `login`, `senha`) VALUES ('$nome', '$email', '$telefone', '$endereco', '$cidade', '$login', '$senha')";
  if ($conn->query($sql) === TRUE) {
    header('location:login.html');
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>