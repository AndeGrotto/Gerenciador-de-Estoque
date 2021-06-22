<?php

class Produtos {
    private $id;
    private $nome;
    private $preco;
    private $quantidade;

    public function __construct() {}

    public function __set($propiedade, $valor) {
        $this->$propiedade = $valor;
    }

    public function __get($propiedade) {
        return $this->$propiedade;
    }
}
?>