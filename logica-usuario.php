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
    header('Location: index.php?falhaDeSeguranca=true');
    die();
    }
}

function logaUsuario($email){
    $_SESSION['usuarioLogado'] = $email;
}

function logout(){
    //unset($_SESSION['usuarioLogado']);
    session_destroy();
}