<?php
require("conexao.php");
require_once("validar_sessao_admin.php");
?>

<HTML>
<HEAD>
    <meta charset="utf-8" />
    <title>Remover Categorias</title>
    <link rel="stylesheet" href="stylesheet.css"
          type="text/css" media="screen">
</HEAD>

<BODY>
<?php
require("topo.php");
?>

<?php
$sql = "SELECT * FROM categoria order by idCategoria ASC";
$resultado = mysqli_query($conn, $sql);
?>

<form name="form" action="proc_remover_categorias.php" method="POST">
    <TABLE BORDER=0 WIDTH=70% HEIGHT=57% ALIGN=CENTER>
        <tr>
            <center> Selecione uma categoria: <select name="idCategoria">
                    <?php
                    while ($linha = mysqli_fetch_array($resultado)) {?>
                        <option value="<?php echo $linha['idCategoria']; ?>">
                            <?php echo $linha['idCategoria'] . ' | ' . $linha['titulo']
                                . ' | ' . $linha['descricao']; ?>
                        </option>
                    <?php } ?>
                </select></center> <br> <br>
            <center><input type="submit" value="Remover"></center>
        </tr>
    </TABLE>
</form>

<?php
require("rodape.php");
?>
</BODY>
</HTML>