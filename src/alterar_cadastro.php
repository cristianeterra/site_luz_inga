<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){
  header('location:index.php');
}
$id = $_POST["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$cidade = $_POST["cidade"];
$login = $_POST['login'];
$senha = $_POST['senha'];
$receberpromocao = $_POST["receberpromocao"];

$conn = new mysqli('mysql', 'root', 'eusouasenha', 'luz_inga_dev');
$sql = "UPDATE `usuario` SET `receberpromocao` = '$receberpromocao', `nome` = '$nome', `email` = '$email', `telefone` = '$telefone', `endereco` = '$endereco', `cidade` = '$cidade', `login` = '$login', `senha` = '$senha' WHERE `id` = '$id'";
if ($conn->query($sql) === TRUE) {
  echo $id;
  echo $_POST["receberpromocao"];
  echo $_POST["nome"];
  echo $_POST["email"];
  echo $_POST["telefone"];
  echo $_POST["endereco"];
  echo $_POST["cidade"];
  echo $_POST["login"];
  echo $_POST["senha"];
  // header('location:cadastro_alterado.html');
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
?>





