<?php
$nome = $_GET['nome'];
    include_once("../Controller/CategoriaController.php");
    $obj = new CategoriaController();
    $obj->controlaExclusao($nome);
?>