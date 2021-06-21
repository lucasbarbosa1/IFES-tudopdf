<?php
session_start();
?>
<HTML>
<HEAD>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet" href="stylesheet.css"
          type="text/css" media="screen">

</HEAD>

<BODY>
<?php
require("topo.php");
?>


<?php
    if(!isset($_SESSION['sLogin'])) {

        ?>
        <form method="post" action="proc_login.php" name="form" align="center">
            <TABLE BORDER=0 WIDTH=98% HEIGHT=50% ALIGN="center">
                <tr>
                    <font size=2>
                        Login: <input type="text" name="login" required> <br> <br>
                        Senha: <input type="password" name="senha" required> <br> <br>
                        <input type="submit" value="Login"> <br> <br>
                        <a href="tela_alterar_senha.php"> <b><i> Esqueci minha senha </i></b></a>
                    </font>
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