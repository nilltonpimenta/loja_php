<?php
include("cabecalho.php");
include("conecta.php");
include("banco-categoria.php");
include ("logica-usuario.php");

verificaUsuario();
$produto = array("nome" => "","descricao" => "","preço" => "", "categoria_id" => "1");
$usado = "";
?>
<h1>Adiciona produto</h1>
    <form action="adiciona-produto.php" method="POST">
        <table class="table">
            <?php include ("produto-formulario-base.php") ?>
            <tr>
                <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
            </tr>
        </table>
    </form>
<?php include("rodape.php");?>