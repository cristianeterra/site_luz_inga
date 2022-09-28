<?php
$descricao = $_POST["descricao"];

$conn = new mysqli('mysql', 'root', 'eusouasenha', 'luz_inga_dev');
if($conn){
  $sql = "INSERT INTO `orcamento` (`descricao`) VALUES ('$descricao');";
  if ($conn->query($sql) === TRUE) {
    echo "Agradecemos a sua inscrição! Em breve, você receberá as nossas promoções!</p></div>" . "<br>";
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>