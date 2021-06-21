<?php
require_once("validar_sessao_admin.php");
?>
<html lang="pt-br">
<head>
    <title>Processando alteração da categoria</title>
    <meta charset='UTF-8'/>
</head>
<body>
<?php
require("conexao.php");

$id = $_POST['idCategoria'];
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];


$sql = "UPDATE categoria SET titulo='$titulo', descricao='$descricao' WHERE idCategoria='$id'";


mysqli_query($conn, $sql) or die("Não foi possível alterar os dados");

echo "<script>alert('Categoria alterada com sucesso!');</script>";
echo "<script>window.location = 'tela_categorias.php';</script>";

?>
</body>
</html>