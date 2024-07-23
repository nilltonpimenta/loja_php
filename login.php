<?php
include ("conecta.php");
include ("banco-usuario.php");
include ("logica-usuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
//echo $usuario;
//var_dump($usuario);

if ($usuario == null) {
    $_SESSION['danger']="Usuário ou senha inválidos";
    header('Location: index.php');
} else {
    logaUsuario($usuario['email']);
    $_SESSION['success']="Logado com sucesso!";
    header('Location: index.php');
}
die();