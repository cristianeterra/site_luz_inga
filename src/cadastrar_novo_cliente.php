<?php
$login = $_POST['login'];
$senha = $_POST['senha'];

$conn = new mysqli('mysql', 'root', 'eusouasenha', 'luz_inga_dev');
if($conn){
  $sql = "INSERT INTO `usuario` (`login`, `senha`) VALUES ('$login', '$senha')";
  if ($conn->query($sql) === TRUE) {
    header('location:login.html');
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>