<?php
session_start(); // informa que trabalharei com sessão nesta página
if (!isset($_SESSION['sLogin'])) {
    echo "<script>alert('Você precisa estar com Login efetuado para acessar essa pagina!');</script>";
    echo "<script>window.location = 'tela_login.php';</script>";
}
?>