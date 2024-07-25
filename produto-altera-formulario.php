<?php
include("cabecalho.php");
include("conecta.php");
include("banco-categoria.php");
include("banco-produto.php");
include ("logica-usuario.php");

verificaUsuario();

$id = $_POST['id'];
$produto = buscaProduto($conexao, $id);

$usado = $produto['usado'] ? 'Checked="Checked"' : '';

?>
<h1>Alterando produto</h1>
    <form action="altera-produto.php" method="POST">
    <input type="hidden" name="id" value="<?=$id?>">    
    <table class="table">
            <?php include ("produto-formulario-base.php") ?>
            <tr>
                <td><button class="btn btn-primary" type="submit">Alterar</td>
            </tr>
        </table>
    </form>
<?php include("rodape.php");?>