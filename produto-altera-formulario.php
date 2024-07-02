<?php
include("cabecalho.php");
include("conecta.php");
include("banco-categoria.php");
include("banco-produto.php");

$id = $_POST['id'];
$produto = buscaProduto($conexao, $id);

$usado = $produto['usado'] ? 'Checked="Checked"' : '';

?>
<h1>Alterando produto</h1>
    <form action="altera-produto.php" method="POST">
    <input type="hidden" name="id" value="<?=$id?>">    
    <table class="table">
            <tr>
                <td>Nome:</td> <td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>"><br/></td>
            </tr>
            <tr>
                <td>Preço:</td> <td><input class="form-control" type="number" step="0.01" name="preco" value="<?=$produto['preco']?>"><br/></td>
            </tr>
            <tr>
                <td>Descrição:</td> <td><textarea class="form-control" name="descricao"><?=$produto['descricao']?></textarea><br/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" name="usado" value="true" <?=$usado?>>Usado?</td>
            </tr>
            <tr>
                <td>Categoria:</td>
                
                <td>
                <select class="form-control" name="categoria_id">
                    <?php $categorias = listaCategorias($conexao);
                                
                    foreach($categorias as $categoria) :
                        $selecao = $produto['categoria_id'] == $categoria['id'] ? 'Selected=Selected' : '';
                    ?>
                    <option value="<?=$categoria['id']?>" <?=$selecao?>><?=$categoria['nome']?><br/></option>
                    <?php   endforeach ?>
                </select>    
                </td>

            </tr>
            <tr>
                <td><button class="btn btn-primary" type="submit">Alterar</td>
            </tr>
        </table>
    </form>
<?php include("rodape.php");?>