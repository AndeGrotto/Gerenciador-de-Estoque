<?php require '__header.phtml'; ?>
<?php require '__menu.phtml'; ?>


    <main>
        <div class="container-fluid">
            <div class="table-responsive-xl table-hover">
                <div class="botao">
                    <button onclick="window.location.href='cadastrarCategoria.php'" class="btn btn-primary">
                        <i class="fa fa-plus-square"></i> Adicionar
                    </button>
                </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Categoria</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include_once("../controller/CategoriaController.php");
                        $obj = new CategoriaController();
                        $obj->controlaConsulta(1);
                    ?>
                </tbody>
            </table>
            </div>
        </div>
    </main>
    
    <?php require '__footer.phtml'; ?>