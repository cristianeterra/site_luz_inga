<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
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

$conn = new mysqli('mysql', 'root', 'eusouasenha', 'luz_inga_dev');
$sql = mysqli_query($conn, "SELECT * FROM usuario") or die(
  mysqli_error($conn) //caso haja um erro na consulta
);
  $sql = "UPDATE `usuario` SET `nome` = '$nome', `email` = '$email', `telefone` = '$telefone', `endereco` = '$endereco', `cidade` = '$cidade', `login` = '$login', `senha` = '$senha' WHERE `usuario`.`id` = '$id'";
  if ($conn->query($sql) === TRUE) {
    header('location:cadastro_alterado.html');
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $result = mysqli_query($conn, "SELECT * FROM usuario WHERE id='" . $_POST['id']. "'");
  $row= mysqli_fetch_array($result);
mysqli_close($conn);
?>





