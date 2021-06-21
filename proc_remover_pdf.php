<?php
require_once("validar_sessao_admin.php");
?>
<html lang="pt-br">
<head>
    <title>Processando remoção do arquivo</title>
    <meta charset='UTF-8'/>
</head>
<body>
<?php
require("conexao.php");

$id = $_POST['idPdf'];

$sql = "DELETE FROM pdf WHERE idPdf='$id'";

mysqli_query($conn, $sql) or die("Não foi possível remover os dados");

echo "<script>alert('Arquivo removido com sucesso!');</script>";
echo "<script>window.location = 'tela_categorias.php';</script>";
?>
</body>
</html>