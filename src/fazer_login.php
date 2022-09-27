<?php
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['login'];
$senha = $_POST['senha'];
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
// $con = mysqli_connect("127.0.0.1", "root", "digite a senha do banco aqui") or die
//  ("Sem conexão com o servidor");
// $select = mysqli_select_db("server") or die("Sem acesso ao DB, Entre em
// contato com o Administrador, gilson_sales@bytecode.com.br");

$conn = new mysqli('mysql', 'root', 'eusouasenha', 'luz_inga_dev');
if($conn){

  // A variavel $result pega as varias $login e $senha, faz uma
  //pesquisa na tabela de usuarios
  $result=mysqli_query($conn,"SELECT * FROM `usuario` WHERE login='$login' AND senha='$senha'");

  // $result = $conn -> query("SELECT * FROM `usuario`
  // WHERE `login` = '$login' AND `senha`= '$senha'");

  /* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi
  bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
  será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do
  resultado ele redirecionará para a página site.php ou retornara  para a página
  do formulário inicial para que se possa tentar novamente realizar o login */
 

  $rowNumber=mysqli_num_rows($result);
  if($rowNumber > 0 ){
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    header('location:login_sucesso.html');
  }else{
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    header('location:cadastro_novo_cliente.html');
  }
}
?>