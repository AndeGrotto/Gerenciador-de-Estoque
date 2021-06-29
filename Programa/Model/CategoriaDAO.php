<?php
class CategoriaDAO {

  public $c = null;
  public $erro = null;
  

  public function __construct() {
    $this->c = new Conect_BD();
	$this->c->exec("set names utf8"); 
  }
  

  public function Inserir($categoria){
    try {
      $stmt = $this->c->query("SELECT * FROM categoria WHERE nome = '$categoria->nome'");
      if($stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT))
	    return -1;

      $stmt = $this->c->prepare("INSERT INTO categoria(nome) VALUES (?)");

    $this->c->beginTransaction();
    $stmt->bindValue(1, $categoria->nome);

      $stmt->execute();

      $this->c->commit(); 

      unset($this->c);
      
      return 1;
    }

	catch(PDOException $e) {
      $this->erro = "Erro: " . $e->getMessage();
	  return 0;
    }
  }

  public function Consultar($op, $param, $value) {
    try {
	  $items = array();

    switch($op)
      {
        case 1:
          $query = "SELECT * FROM categoria";
          break;
        case 2:
          $query = "SELECT * FROM categoria WHERE $param=$value";
          break;      
      }    
	  
      if($query != null)
        $stmt = $this->c->query($query);
      else
        $stmt = $this->c->query("SELECT * FROM categoria");
		
	  $this->c = null;
	  
	  while($registro = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT))
	  {
	    $c = new Categoria();
		
		// Sempre verifica se a query SQL retornou a respectiva coluna
    if(isset($registro["nome"]))
		  $c->nome = $registro["nome"];

		// Ao final, adiciona o registro como um item do array de retorno
	    $items[] = $c;
	  }
	  
      return $items;
    }
	// Em caso de erro, retorna a mensagem:
	catch(PDOException $e) {
      echo "Erro: ".$e->getMessage();
    }
  }

  public function Excluir($cod) {
    try {
      $stmt = $this->c->prepare("DELETE FROM categoria WHERE nome=?");

      $this->c->beginTransaction();

      $stmt->bindValue(1, $cod);
    

      $stmt->execute();
      $this->c->commit();
      $this->c = null;

      return true;
    }

    catch(PDOException $e) {
      $this->erro = "Erro: " . $e->getMessage();
      return false;
    }
  }


}
?>