<?php
require_once("validar_sessao_usuario.php");
?>
<HTML>
<HEAD>
    <meta charset="utf-8" />
    <title>Upload</title>
    <link rel="stylesheet" href="stylesheet.css"
          type="text/css" media="screen">


</HEAD>

<BODY>

<?php
require("topo.php");
require("conexao.php");
$sql = "SELECT * FROM categoria order by titulo ASC";
$resultado = mysqli_query($conn, $sql);

?>




<form name="upload_pdf" action="proc_upload.php" method="post" enctype="multipart/form-data">
    <TABLE BORDER=0 WIDTH=98% HEIGHT=22% ALIGN=CENTER>
        <TR>
            <center> Titulo: <input type="text" name="titulo" required></center> <br> <br>
            <center> Autor: <input type="text" name="autor" required></center> <br> <br>
            <center> Ano: <input type="int" name="ano" required></center> <br> <br>
            <center> Categoria: <select name="idCategoria" required>
                    <?php
                        while ($linha = mysqli_fetch_array($resultado)) {?>
                            <option value="<?php echo $linha['idCategoria']; ?>">
                                <?php echo $linha['idCategoria'] . ' | ' . $linha['titulo']; ?>
                            </option>
                        <?php } ?>
                </select></center> <br> <br>
            <input type="hidden" name="MAX_FILE_SIZE" value="10000000">

            <center><input type="file" name="arquivo"  required/></center><br> <br>
            <center><input type="submit" value="Enviar"  /></center><br> <br>


        </TR>
</form>

<?php
require("rodape.php");
?>

</BODY>
</HTML>

