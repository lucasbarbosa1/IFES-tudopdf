<html>
<head>
    <title></title>
    <meta charset='utf-8' />
</head>
<body>

<?php
session_start(); // informa que trabalharei com sessão nesta página
if (($_SESSION['sLogin']) != 'admin') {
    echo "<script>alert('ACESSO NEGADO! SOMENTE ADMINISTRADORES PODEM ACESSAR ESTA PAGINA!');</script>";
    echo "<script>window.location = 'tela_categorias.php';</script>";
}
?>

</body>
</html>
