<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$descricao = $_POST["descricao"];

$conn = new mysqli('mysql', 'root', 'eusouasenha', 'luz_inga_dev');
if($conn){
  $sql = "INSERT INTO `orcamento` (`nome`, `email`, `descricao`) VALUES ('$nome', '$email', '$descricao');";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully" . "<br>";
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>