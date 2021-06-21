<?php
require_once("validar_sessao_admin.php");
?>
<html lang="pt-br">
<head>
    <title>Processando alteração do pdf</title>
    <meta charset='UTF-8'/>
</head>
<body>
<?php
require("conexao.php");

$id = $_POST['idPdf'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$ano = $_POST['ano'];
$categoria = $_POST['idCategoria'];

$sql = "UPDATE `pdf` SET `titulo`='$titulo', `autor`='$autor', `ano`='$ano', `categoria`='$categoria' WHERE `idPdf`='$id'";

mysqli_query($conn, $sql) or die("Não foi possível alterar os dados");

echo "<script>alert('Arquivo alterado com sucesso!');</script>";
echo "<script>window.location = 'tela_categorias.php';</script>";

?>
</body>
</html>