<?php
$descricao = $_POST["descricao"];

$conn = new mysqli('mysql', 'root', 'eusouasenha', 'luz_inga_dev');
if($conn){
  $sql = "INSERT INTO `orcamento` (`descricao`) VALUES ('$descricao');";
  if ($conn->query($sql) === TRUE) {
    echo "Agradecemos a sua solicitação! Em breve, você receberá o nosso orçamento!</p></div>" . "<br>";
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
mysqli_close($conn);
?>