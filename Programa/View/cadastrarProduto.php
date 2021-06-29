<?php require '__header.phtml'; ?>
<?php require '__menu.phtml'; ?>

<div class="container">

    <?php
        include_once("../Controller/ProdutoController.php");
        $obj = new ProdutoController();
        $obj->controlaInsercao();
    ?>
    <div class="page-header">
        <h2>Adicionar produto</h2>
        <a class="btn btn-light" href="mostrarProduto.php">
            <i class="fa fa-times-circle" style="margin-right:8px"></i><span>Cancelar</span>
        </a>
    </div>
    
    <form method="POST" action="cadastrarProduto.php">
        <div class="mb-3">
            <label for="input-isbn" class="form-label">Código</label>
            <input type="text" maxlength="15" class="codigo form-control font" id="codigo" name="codigo" title="Digite o código" required>
        </div>

        <div class="mb-3">
            <label for="input-nome" class="form-label">Nome</label>
            <input type="text" maxlength="30" class="form-control font" id="nome" name="nome" title="Digite o nome do produto" required>
        </div>

        <div class="mb-3">
            <label for="input-autor" class="form-label">Preço</label>
            <input type="text" maxlength="20" class="preco form-control font" id="preço" name="preco" title="Digite o valor" required>
        </div>

        <div class="mb-3">
            <label for="input-autor" class="form-label">Quantidade</label>
            <input type="text" maxlength="15" class="quantidade form-control font" id="quantidade" name="quantidade" title="Digite a quantidade" required>
        </div>

        <div class="mb-3">
            <?php
                include_once("../Controller/CategoriaController.php");
                $obj = new CategoriaController();
                $obj->controlaConsulta(2);
            ?>
        </div>
        
        <button type="submit" class="btn btn-primary">Cadastrar produto</button>
    </form>
</div>



<?php require '__footer.phtml'; ?>