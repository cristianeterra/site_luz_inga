<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$cidade = $_POST["cidade"];

$conn = new mysqli('mysql', 'root', 'eusouasenha', 'luz_inga_dev');
if($conn){
  $sql = "INSERT INTO `usuario` (`nome`, `email`, `telefone`, `endereco`, `cidade`) VALUES ('$nome', '$email', '$telefone', '$endereco', '$cidade')";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully" . "<br>";
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
mysqli_close($conn);
?>