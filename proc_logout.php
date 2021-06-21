<?php
session_start();
// limpando a sessão clientes
unset($_SESSION['sLogin']);
// session_destroy(); // mata as sessões existentes

//redirecionamos para a página de login
header("Location: index.php");
?>