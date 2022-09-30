<?php
$nome = $_POST["nome"];

$conn = new mysqli('mysql', 'root', 'eusouasenha', 'luz_inga_dev');
if($conn){
  $sql = "INSERT INTO `produto` (`nome`) VALUES ('$nome');";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully" . "<br>";
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
mysqli_close($conn);
?>