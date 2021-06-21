<?php
require("conexao.php");
require("validar_sessao_usuario.php");
?>

<HTML>
<HEAD>
    <meta charset="utf-8" />
    <title>Pdfs</title>
    <link rel="stylesheet" href="stylesheet.css"
          type="text/css" media="screen">
</HEAD>

<BODY>
<?php
require("topo.php");
?>

<?php
if(isset($_GET['idCategoria'])){
$categoria = $_GET['idCategoria'];
$sql = "SELECT `idPdf`, `titulo`, `autor`, `ano` FROM `pdf` WHERE `categoria` = '$categoria'";
$resultado = mysqli_query($conn, $sql);
?>

<form name="form" action="proc_download.php" method="get">
    <TABLE BORDER=0 WIDTH=70% HEIGHT=55% ALIGN=CENTER>
        <tr>
            <center> Selecione um pdf: <select name="idPdf">
                    <?php
                    while ($linha = mysqli_fetch_array($resultado)) { ?>
                        <option value="<?php echo $linha['idPdf']; ?>">
                            <?php echo $linha['idPdf'] . ' | ' . $linha['titulo']
                                . ' | ' . $linha['autor'] . ' | ' . $linha['ano']; ?>
                        </option>
                    <?php } ?>
                </select></center>
            <br> <br>
            <center><input type="submit" value="DOWNLOAD"></center><br>
            <?php if (($_SESSION['sLogin']) == 'admin'){ ?><td><center><a href="tela_upload.php"> Inserir PDF </a></center></td>
                <td><center><a href="tela_alterar_pdf.php"> Alterar PDF </a></center></td>
                <td><center><a href="tela_remover_pdf.php"> Remover PDF </a></center></td>
            <?php } ?>
        </tr>
    </TABLE>

    <?php
    } else{
    echo "<center> Voce nao veio de um metodo GET valido!</center>";
    }
    require("rodape.php");
    ?>
</BODY>
</HTML>