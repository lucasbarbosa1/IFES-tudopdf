<?php
require_once("validar_sessao_admin.php");
?>
<html lang="pt-br">
<head>
    <title>Processando remoção da categoria</title>
    <meta charset='UTF-8'/>
</head>
<body>
<?php
require("conexao.php");

$id = $_POST['idCategoria'];


$consulta = "DELETE FROM pdf WHERE categoria='$id'";
$sql = "DELETE FROM categoria WHERE idCategoria='$id'";

mysqli_query($conn, $consulta) or die("Não foi possível remover os dados");

mysqli_query($conn, $sql) or die("Não foi possível remover os dados");

echo "<script>alert('Categoria removida com sucesso!');</script>";
echo "<script>window.location = 'tela_categorias.php';</script>";
?>
</body>
</html>