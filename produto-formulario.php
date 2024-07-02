<?php
include("cabecalho.php");
include("conecta.php");
include("banco-categoria.php");
?>
<h1>Formulário de produto</h1>
    <form action="adiciona-produto.php" method="POST">
        <table class="table">
            <tr>
                <td>Nome:</td> <td><input class="form-control" type="text" name="nome"><br/></td>
            </tr>
            <tr>
                <td>Preço:</td> <td><input class="form-control" type="number" step="0.01" name="preco"><br/></td>
            </tr>
            <tr>
                <td>Descrição:</td> <td><textarea class="form-control" name="descricao"></textarea><br/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" name="usado" value="true">Usado?</td>
            </tr>
            <tr>
                <td>Categoria:</td>
                
                <td>
                <select class="form-control" name="categoria_id">
                    <?php $categorias = listaCategorias($conexao);
                                
                    foreach($categorias as $categoria) : ?>
                    <option value="<?=$categoria['id']?>"><?=$categoria['nome']?><br/></option>
                    <?php   endforeach ?>
                </select>    
                </td>

            </tr>
            <tr>
                <td><button class="btn btn-primary" type="submit">Cadastrar</td>
            </tr>
        </table>
    </form>
<?php include("rodape.php");?>