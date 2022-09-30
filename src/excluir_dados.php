<?php
$id = $_POST['id'];
$conn = new mysqli('mysql', 'root', 'eusouasenha', 'luz_inga_dev');

$sql = "DELETE FROM `usuario` WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  header('location:listar_usuarios.php');
} else {
  echo "Error deleting record: " . $conn->error;
}
mysqli_close($conn);
?>