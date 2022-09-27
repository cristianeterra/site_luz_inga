<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$cidade = $_POST["cidade"];
$lista = $_POST["lista"];

$conn = new mysqli('mysql', 'root', 'eusouasenha', 'luz_inga_dev');
if($conn){
  $sql = "INSERT INTO `cliente` (`nome`, `email`, `telefone`, `endereco`, `cidade`, `lista`) VALUES ('$nome', '$email', '$telefone', '$endereco', '$cidade', '$lista');";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully" . "<br>";
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>