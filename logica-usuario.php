<?php
session_start();

function usuarioEstaLogado(){
    return isset($_SESSION['usuarioLogado']);
}

function usuarioLogado(){
    return $_SESSION['usuarioLogado'];
}

function verificaUsuario(){
    if (!usuarioEstaLogado()) {
    $_SESSION['danger']="Você não tem aceso a essa funcionalidade!";
    header('Location: index.php');
    die();
    }
}

function logaUsuario($email){
    $_SESSION['usuarioLogado'] = $email;
}

function logout(){
    //Tenho como opção tbm
    //unset($_SESSION['usuarioLogado']);
    session_destroy();
    session_start();
}