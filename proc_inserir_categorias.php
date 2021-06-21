<?php
require_once("validar_sessao_admin.php");
?>
<html lang="pt-br">
<head>
    <title>Processando cadastro de categoria</title>
    <meta charset='UTF-8'/>
</head>
<body>
<?php
require("conexao.php");

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];

$sql = "INSERT INTO categoria (titulo, descricao)
        VALUES('$titulo','$descricao')";

mysqli_query($conn, $sql) or die("Não foi possível inserir os dados");

echo "<script>alert('Categoria cadastrada com sucesso!');</script>";
echo "<script>window.location = 'tela_categorias.php';</script>";
?>
</body>
</html>