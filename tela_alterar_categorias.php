<?php
require("conexao.php");
require_once("validar_sessao_admin.php");
?>

<HTML>
<HEAD>
    <meta charset="utf-8" />
    <title>Alterar Categorias</title>
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

<form name="form" action="proc_alterar_categorias.php" method="POST">
    <TABLE BORDER=0 WIDTH=70% HEIGHT=35% ALIGN=CENTER>
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
            <center> <font size=4>Preencha os campos com suas alteracoes(Nos campos os quais não se queira alterar, apenas redigite o valor ja salvo):</font> </center>  <br>
            <center> Titulo/Nome: <input type="text" name="titulo" required></center> <br> <br>
            <center> Descricao: <input type="text" name="descricao" required></center> <br> <br>
            <center><input type="submit" value="Alterar"></center>
        </tr>
    </TABLE>
</form>

<?php
require("rodape.php");
?>
</BODY>
</HTML>