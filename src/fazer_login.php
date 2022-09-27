<?php
$username = $_POST["username"];
$pwd = $_POST["pwd"];

$conn = new mysqli('mysql', 'root', 'eusouasenha', 'luz_inga_dev');
if($conn){
  $sql = "INSERT INTO `usuario` (`username`, `pwd`) VALUES ('$username', '$pwd')";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully" . "<br>";
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>