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

if (alteraProduto($conexao,$id,$nome,$preco,$descricao,$categoria_id,$usado)) { 
    $_SESSION['success']="Produto $nome, de $preco, foi alterado com SUCESSO!";
    header("Location:produto-lista.php");
} else { 
    $msg = mysqli_error($conexao);
    $_SESSION['danger']="O produto não foi alterado: $msg";
    header("Location:produto-lista.php");
}

mysqli_close($conexao);
?>

<?php include("rodape.php");?>