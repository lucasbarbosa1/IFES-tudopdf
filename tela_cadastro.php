<?php
session_start();
?>
<html>
<HEAD>
    <meta charset="utf-8" />
    <title>Cadastro</title>
    <link rel="stylesheet" href="stylesheet.css"
          type="text/css" media="screen">

</HEAD>

<body>
<?php
require("topo.php");
?>


<?php
if(!isset($_SESSION['sLogin'])) {

?>
<form method="post" action ="proc_cadastro.php" name="form" align="center">
    <TABLE BORDER=0 WIDTH=98% HEIGHT=60% ALIGN=CENTER>
        <tr>
                <center>Nome:  <input type="text" name="nome" required></center> <br> <br>
        </tr>
        <tr>
                <center>Login:  <input type="text" name="login" required></center> <br> <br>
        </tr>
             <tr>
                 <center>Senha: <input type="password" name="senha" required></center> <br> <br>
             </tr>
             <tr>
                 <center>CPF: <input type="text" name="cpf" required></center> <br> <br>
             </tr>
        <tr>
                <center><input type="submit" value="Cadastrar"></center>
        </tr>
</form>
    <?php
} else{
    ?>
    <TABLE BORDER=0 WIDTH=98% HEIGHT=67% ALIGN=CENTER>
        <tr>
            <?php echo "<center> Usuario ja esta logado!!! </center>"; ?>
        </tr>
    </TABLE>
<?php
}

require("rodape.php");
?>
</BODY>
</HTML>