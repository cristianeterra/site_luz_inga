<?php
$empresa = $_POST["empresa"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$cidade = $_POST["cidade"];
$descricao = $_POST["descricao"];
$lista = $_POST["lista"];

$conn = new mysqli('mysql', 'root', 'eusouasenha', 'luz_inga_dev');
if($conn){
  $sql = "INSERT INTO `cliente` (`empresa`, `nome`, `email`, `telefone`, `endereco`, `cidade`, `descricao`, `lista`) VALUES ('$empresa', '$nome', '$email', '$telefone', '$endereco', '$cidade', '$descricao', '$lista');";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully" . "<br>";
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>