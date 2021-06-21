<?php
require("conexao.php");
require_once("validar_sessao_admin.php");
?>

<HTML>
<HEAD>
    <meta charset="utf-8" />
    <title>Alterar pdf</title>
    <link rel="stylesheet" href="stylesheet.css"
          type="text/css" media="screen">
</HEAD>

<BODY>
<?php
require("topo.php");
?>

<?php
$sql = "SELECT * FROM pdf order by titulo ASC";
$resultado = mysqli_query($conn, $sql);

$consulta = "SELECT * FROM categoria order by titulo ASC";
$result = mysqli_query($conn, $consulta);
?>

<form name="form" action="proc_alterar_pdf.php" method="POST">
    <TABLE BORDER=0 WIDTH=70% HEIGHT=21% ALIGN=CENTER>
        <tr>
            <center> Selecione um pdf: <select name="idPdf">
                    <?php
                    while ($linha = mysqli_fetch_array($resultado)) {?>
                        <option value="<?php echo $linha['idPdf']; ?>">
                            <?php echo $linha['idPdf'] . ' | ' . $linha['titulo']
                                . ' | ' . $linha['autor'] . ' | ' . $linha['ano']; ?>
                        </option>
                    <?php } ?>
                </select></center> <br> <br>
            <center> <font size=4>Preencha os campos com suas alteracoes(Nos campos os quais não se queira alterar, apenas redigite o valor ja salvo): </font></center>  <br>
            <center> Titulo: <input type="text" name="titulo" required></center> <br> <br>
            <center> Autor: <input type="text" name="autor" required></center> <br> <br>
            <center> Ano: <input type="text" name="ano" required></center> <br> <br>
            <center> Categoria: <select name="idCategoria" required>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {?>
                        <option value="<?php echo $row['idCategoria']; ?>">
                            <?php echo $row['idCategoria'] . ' | ' . $row['titulo']; ?>
                        </option>
                    <?php } ?>
                </select></center> <br> <br>
            <center><input type="submit" value="Alterar"></center>
        </tr>
    </TABLE>
</form>

<?php
require("rodape.php");
?>
</BODY>
</HTML>