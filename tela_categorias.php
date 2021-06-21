<?php
session_start();
require("conexao.php");
?>

<HTML>
<HEAD>
    <meta charset="utf-8" />
    <title>Categorias</title>
    <link rel="stylesheet" href="stylesheet.css"
          type="text/css" media="screen">
</HEAD>

<BODY>
<?php
require("topo.php");
?>

<?php
$sql = "SELECT * FROM categoria order by titulo ASC";
$resultado = mysqli_query($conn, $sql);
?>

<form name="form" action="tela_pdf.php" method="get">
<TABLE BORDER=0 WIDTH=70% HEIGHT=52% ALIGN=CENTER>
    <tr>
        <center> Selecione uma categoria: <select name="idCategoria">
                <?php
                while ($linha = mysqli_fetch_array($resultado)) {?>
                    <option value="<?php echo $linha['idCategoria']; ?>">
                        <?php echo $linha['idCategoria'] . ' | ' . $linha['titulo']; ?>
                    </option>
                <?php } ?>
            </select></center> <br> <br>
        <center><input type="submit" value="IR"></center> <br> <br>
    </tr>
    <tr>
        <?php if(isset($_SESSION['sLogin'])) {
            if (($_SESSION['sLogin']) == 'admin') { ?>
                <td>
                    <center><a href="tela_inserir_categorias.php"> Inserir Categoria </a></center>
                </td>
                <td>
                    <center><a href="tela_alterar_categorias.php"> Alterar Categoria </a></center>
                </td>
                <td>
                    <center><a href="tela_remover_categorias.php"> Remover Categoria </a></center>
                </td>
            <?php }
        } ?>
    </tr>
</TABLE>
</form>

<?php
require("rodape.php");
?>
</BODY>
</HTML>