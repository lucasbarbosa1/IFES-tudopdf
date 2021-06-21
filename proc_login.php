<?php
session_start();
require("conexao.php");
?>
<html>

<head>
    <title>Autenticando usuario</title>
    <script type="text/javascript">
        function loginsuccess() {
            setTimeout("window.location='index.php'", 2000);
        }

        function loginfail() {
            setTimeout("window.location='tela_login.php'", 2000);
        }
    </script>

</head>

<body>
<?php
$login =$_POST['login'];
$senha=md5($_POST['senha']);
$sql = mysqli_query($conn,"SELECT * FROM `usuario` WHERE `login` = '$login' AND `senha` = '$senha'") or die(mysqli_error($conn));
$linha = mysqli_num_rows($sql);
if($linha> 0) {
    $_SESSION['sLogin'] = $_POST['login'];
  //  $_SESSION['sSenha']=$_POST['senha'];
    echo "<center> Login efetuado com sucesso </center>";
    echo "<script>loginsuccess()</script>";
}else {
    echo "<center> Login ou senha inválido(s)! Aguarde um instante para tentar novamente</center>";
    echo "<script>loginfail() </script>";
}
?>

</body>
</html>