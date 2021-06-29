<?php require '__header.phtml'; ?>
<?php require '__menu.phtml'; ?>

<div class="container">
<?php
    include_once("../Controller/CategoriaController.php");
    $obj = new CategoriaController();
        
    $nome = $_GET['nome'];
    $obj->controlaAlteracao();
?>
    <div class="page-header">
        <h2>Editar Categoria</h2>
        <a class="btn btn-light" href="mostrarCategoria.php">
            <i class="fa fa-times-circle" style="margin-right:8px"></i><span>Cancelar</span>
        </a>
    </div>
    <form method="POST" action="editarCategoria.php">
        <div class="mb-3">
            <label for="input-isbn" class="form-label">Nome</label>
            <input type="text" maxlength="30" class="form-control font" id="nome" name="nome" value="<?php echo $nome; ?>">
        </div>

        <button type="submit" class="btn btn-primary">Editar produto</button>
    </form>
</div>



<?php require '__footer.phtml'; ?>