<?php
require_once("validar_sessao_usuario.php");

    require("conexao.php");

    $id    = $_GET['idPdf'];
    $query = "SELECT titulo, autor, ano, categoria, conteudo, tamanho, nm_download " .
        "FROM pdf WHERE idPdf = '$id'";

    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    list($titulo, $autor, $ano, $categoria, $conteudo, $tamanho, $nm_download) = mysqli_fetch_array($result);


    header("Content-length: $tamanho");
    header("Content-type: application/pdf");
    header("Content-Disposition: attachment; filename=$nm_download");
    echo $conteudo;


?>