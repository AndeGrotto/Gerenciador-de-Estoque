<?php

class Categoria {
    private $id;
    private $nome;

    public function __construct() {}

    public function __set($propiedade, $valor) {
        $this->$propiedade = $valor;
    }

    public function __get($propiedade) {
        return $this->$propiedade;
    }
}
