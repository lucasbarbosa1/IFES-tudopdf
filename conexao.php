<?php
$local_serve = "localhost";
$usuario_serve = "root";
$senha_serve = "";
$banco_de_dados = "tudopdf";

$conn = mysqli_connect($local_serve,$usuario_serve,$senha_serve)
or die ("O servidor não responde!");

$db = mysqli_select_db($conn, $banco_de_dados)
or die ("Erro: " .mysqli_error($conn));
?>
