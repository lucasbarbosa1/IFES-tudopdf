<?php
require("conexao.php");
require_once("validar_sessao_admin.php");
?>

<HTML>
<HEAD>
    <meta charset="utf-8" />
    <title>Remover pdfs</title>
    <link rel="stylesheet" href="stylesheet.css"
          type="text/css" media="screen">
</HEAD>

<BODY>
<?php
require("topo.php");
?>

<?php
$sql = "SELECT * FROM pdf order by idPdf ASC";
$resultado = mysqli_query($conn, $sql);
?>

<form name="form" action="proc_remover_pdf.php" method="POST">
    <TABLE BORDER=0 WIDTH=70% HEIGHT=55% ALIGN=CENTER>
        <tr>
            <center> Selecione um pdf: <select name="idPdf">
                    <?php
                    while ($linha = mysqli_fetch_array($resultado)) {?>
                        <option value="<?php echo $linha['idPdf']; ?>">
                            <?php echo $linha['idPdf'] . ' | ' . $linha['titulo']
                                . ' | ' . $linha['autor'] . ' | ' . $linha['ano'];?>
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