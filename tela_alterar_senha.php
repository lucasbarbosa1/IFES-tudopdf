<?php
session_start();
require("conexao.php");
?>

<HTML>
<HEAD>
    <meta charset="utf-8" />
    <title>Alterar senha</title>
    <link rel="stylesheet" href="stylesheet.css"
          type="text/css" media="screen">
</HEAD>

<BODY>
<?php
require("topo.php");
?>


<form name="form" action="proc_alterar_senha.php" method="POST">
    <TABLE BORDER=0 WIDTH=70% HEIGHT=60% ALIGN=CENTER>
        <tr>
            <center> Login: <input type="text" name="login" required></center> <br> <br>
            <center> CPF: <input type="text" name="cpf" required></center> <br> <br>
            <center> Nova Senha: <input type="password" name="senha" required></center> <br> <br>

            <center><input type="submit" value="Enviar"></center>
        </tr>
    </TABLE>
</form>

<?php
require("rodape.php");
?>
</BODY>
</HTML>