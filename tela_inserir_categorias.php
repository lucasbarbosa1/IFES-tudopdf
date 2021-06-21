<?php
require_once("validar_sessao_admin.php");
?>
<HTML>
<HEAD>
    <meta charset="utf-8" />
    <title>Inserir categoria</title>
    <link rel="stylesheet" href="stylesheet.css"
          type="text/css" media="screen">

</HEAD>

<BODY>

<?php
require("topo.php");
?>



<form method="post" action="proc_inserir_categorias.php" name="form">
<TABLE BORDER=0 WIDTH=98% HEIGHT=45% ALIGN=CENTER>
    <TR>
        <center> Titulo/Nome: <input type="text" name="titulo"></center> <br> <br>
        <center> Descricao: <input type="text" name="descricao"></center> <br> <br>
        <center><input name="Submit" value="Inserir Categoria" type="submit"></center> <br> <br>
    </TR>
    </TABLE>
</form>

<?php
require("rodape.php");
?>

</BODY>
</HTML>