<?php
$codigo = $_GET['codigo'];
    include_once("../Controller/ProdutoController.php");
    $obj = new ProdutoController();
    $obj->controlaExclusao($codigo);
?>