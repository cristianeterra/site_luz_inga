<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  header('location:index.php');
}

$descricao = $_POST["descricao"];

$conn = new mysqli('mysql', 'root', 'eusouasenha', 'luz_inga_dev');
if($conn){
  $sql = "INSERT INTO `orcamento` (`descricao`) VALUES ('$descricao');";
  if ($conn->query($sql) === TRUE) {
    header('location:orcamento_enviado.html');
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
mysqli_close($conn);
?>