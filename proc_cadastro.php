<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Processando cadastro do usuário</title>
    <script type="text/javascript">
        function userExist() {
            setTimeout("window.location='tela_cadastro.php'", 3000);
        }
    </script>
    <meta charset='UTF-8'/>
</head>
<body>
<?php
require("conexao.php");

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = md5($_POST['senha']);
$cpf = $_POST['cpf'];

$consulta = mysqli_query($conn,"SELECT * FROM `usuario` WHERE `login` = '$login'") or die(mysqli_error($conn));
$linha = mysqli_num_rows($consulta);
$consult= mysqli_query($conn, "SELECT * FROM `usuario` WHERE `cpf` = '$cpf'") or die(mysqli_error($conn));
$row = mysqli_num_rows($consult);

if(($linha>0) ||($row>0) ){
    echo "<center> Login/cpf ja cadastrado(s)!!! </center>";
    echo "<script> userExist()</script>";

}else{
    $sql = "INSERT INTO `usuario` (`nome`, `login`, `senha`, `cpf`)
      VALUES('$nome','$login','$senha', '$cpf')";

    $sql_exec = mysqli_query($conn, $sql) or die("Erro: " .mysqli_error($conn));

    echo "<script>alert('Usuário cadastrado com sucesso!');</script>";
    echo "<script>window.location = 'tela_login.php';</script>";
}
?>
</body>
</html>
