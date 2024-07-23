<?php
include("cabecalho.php");
include ("logica-usuario.php");

if (isset($_GET['logout']) && $_GET['logout']==true) { ?>
    <p class="alert-success">Deslogado com sucesso!</p>
<?php }
if (isset($_GET['login']) && $_GET['login']==true) { ?>
    <p class="alert-success">Logado com sucesso!</p>
<?php } elseif (isset($_GET['login']) && $_GET['login']==false) { ?>
    <p class="alert-danger">Login falhou!</p>
<?php
}

if (isset($_GET['falhaDeSeguranca']) && $_GET['falhaDeSeguranca']==true) { ?>
    <p class="alert-danger">Você não tem aceso a essa funcionalidade!</p>
<?php
}
?>
            <h1>Bem vindo!</h1>
            <?php   if (usuarioEstaLogado()) { ?>
            <p class="alert-success">Você está logado como <?=usuarioLogado()?>!</p> <a href="logout.php">Deslogar</a>
            <?php } else { ?>
            <h2>Login</h2>
            <form action="login.php" method="post">
            <table class="table">
                <tr><td>Email
                <td><input class="form-control" type="email" name="email">
                <tr><td>Senha
                <td><input class="form-control" type="password" name="senha">
                <tr><td><button class="btn btn-primary">Login</button>
            </table>
            </form>
            <?php } ?>
<?php include("rodape.php");?>