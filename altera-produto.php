<?php
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$categoria_id = $_POST['categoria_id'];
$id = $_POST['id'];

if (array_key_exists("usado",$_POST)) {
    $usado = $_POST['usado'];
} else {
    $usado = "false";
}

if (alteraProduto($conexao,$id,$nome,$preco,$descricao,$categoria_id,$usado)) { ?>
    <p class="text-success">Produto <?php echo $nome;?>, de <?= $preco ?>, foi alterado com SUCESSO!</p>
<?php } else { 
    $msg = mysqli_error($conexao);
?>
    <p class="text-danger">O produto não foi alterado: <?=$msg?> </p>

<?php }

mysqli_close($conexao);
?>

<?php include("rodape.php");?>