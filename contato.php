<?php
include ("cabecalho.php");
?>

<form action="envia-contato.php" method="post">
    <table class="table">
        <tr>
            <td>Nome:</td>
            <td><input type="text" name="nome" class="form-control"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" class="form-control" placeholder="...@bol.com.br"></td>
        </tr>
        <tr>
            <td>Mensagem:</td>
            <td><textarea name="mensagem"  class="form-control">Por favor, coloque sua mensagem aqui.</textarea></td>
        </tr>
        <tr><td><button class="btn btn-primary">Enviar</button></td></tr>
    </table>
</form>

<?php include ("rodape.php");