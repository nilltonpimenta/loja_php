<?php
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");
?>

<?php if (array_key_exists("removido",$_GET) && $_GET["removido"]==true ) {
    $id=$_GET["id"] ?>

    <p class="alert-success">O produto <?=$id?> foi removido com Sucesso!</p>
<?php } ?>

<table class="table table-striped table-bordered">
  <thead>
    <tr>
        <th>Produto</th>
        <th>Preço</th>
        <th>Descrição</th>
        <th>Categoria</th>
    </tr>
</thead>
<?php
    $produtos = listaProdutos($conexao);
        foreach($produtos as $produto) :
?>
  <tr>
    <td><?php echo $produto['nome'] ?></td>
    <td><?= $produto['preco'] ?></td>
    <td><?= substr($produto['descricao'], 0, 40)."..." ?></td>
    <td><?= $produto['cnome'] ?></td>
    <td>
        <form action="produto-altera-formulario.php" method="POST">
          <input type="hidden" name="id" value="<?=$produto['id']?>">
          <button class="btn btn-primary">Alterar</button>
        </form>
    </td>
    <td>
        <form action="remove-produto.php" method="POST">
          <input type="hidden" name="id" value="<?=$produto['id']?>">
          <button class="btn btn-danger">Remover</button>
        </form>
    </td>
  </tr>
<?php   endforeach ?>
</table>

<?php include("rodape.php");?>