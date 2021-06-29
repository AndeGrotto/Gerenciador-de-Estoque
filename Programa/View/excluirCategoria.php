<?php
$codigo = $_GET['codigo'];
    include_once("../Controller/CategoriaController.php");
    $obj = new CategoriaController();
    $obj->controlaExclusao($codigo);
?>