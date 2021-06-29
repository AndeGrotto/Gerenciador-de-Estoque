<?php require '__header.phtml'; ?>
<?php require '__menu.phtml'; ?>


    <main>
        <div class="container-fluid">
            <div class="table-responsive-xl table-hover">
                <div class="botao">
                    <button onclick="window.location.href='cadastrarProduto.php'" class="btn btn-primary">
                        <i class="fa fa-plus-square"></i> Adicionar
                    </button>
                </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Categoria</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        include_once("../controller/ProdutoController.php");
                        $obj = new ProdutoController();
                        $obj->controlaConsulta(1);
                    ?>
                </tbody>
            </table>
            </div>
        </div>
    </main>
    
    <?php require '__footer.phtml'; ?>