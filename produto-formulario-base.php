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