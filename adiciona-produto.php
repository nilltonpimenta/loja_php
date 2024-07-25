<?php
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");
include ("logica-usuario.php");

verificaUsuario();

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$categoria_id = $_POST['categoria_id'];

if (array_key_exists("usado",$_POST)) {
    $usado = $_POST['usado'];
} else {
    $usado = "false";
}

if (insereProduto($conexao,$nome,$preco,$descricao,$categoria_id,$usado)) { 
    $_SESSION['success']="Produto $nome, de $preco, foi adicionado com SUCESSO!";
    header("Location:produto-lista.php");
} else { 
    $msg = mysqli_error($conexao);
    $_SESSION['success']="O produto não foi adicionado: <?=$msg?>";
    header("Location:produto-lista.php");
}

mysqli_close($conexao);
?>

<?php include("rodape.php");?>