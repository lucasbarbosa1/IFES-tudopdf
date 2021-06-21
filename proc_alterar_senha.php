<html lang="pt-br">
<head>
    <title>Processando alteração da senha</title>
    <meta charset='UTF-8'/>
</head>
<body>
<?php
require("conexao.php");

$login = $_POST['login'];
$cpf = $_POST['cpf'];
$senha = md5($_POST['senha']);

$sql = "UPDATE usuario SET `senha` = '$senha' WHERE `login` = '$login' AND `cpf` = '$cpf'";

mysqli_query($conn, $sql) or die("Login/CPF nao cadastrado(s)");

echo "<script>alert('Senha Alterada com sucesso!');</script>";
echo "<script>window.location = 'tela_login.php';</script>";

?>
</body>
</html>