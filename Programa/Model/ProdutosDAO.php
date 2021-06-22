<?php
class ProdutosDAO {

  public $p = null;
  public $erro = null;
  

  public function __construct() {
    $this->p = new Conect_BD();
	$this->p->exec("set names utf8"); 
  }
  

  public function Inserir($produtos){
    try {
      $stmt = $this->p->query("SELECT * FROM produtos WHERE nome = '$produtos->nome'");
      if($stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT))
	    return -1;

      $stmt = $this->p->prepare("INSERT INTO produtos(nome, preco, quantidade) VALUES (?, ?, ?)");

    $this->p->beginTransaction();
    $stmt->bindValue(1, $produtos->nome);
    $stmt->bindValue(2, $produtos->preco);
    $stmt->bindValue(3, $produtos->quantidade);

      $stmt->execute();

      $this->p->commit(); 

      unset($this->p);
      
      return 1;
    }

	catch(PDOException $e) {
      $this->erro = "Erro: " . $e->getMessage();
	  return 0;
    }
  }


  public function Consultar($query=null) {
    try {
	  $items = array();
	  
      if($query != null)
        $stmt = $this->p->query($query);
      else
        $stmt = $this->p->query("SELECT * FROM produtos");
		
	  $this->p = null;
	  
	  while($registro = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT))
	  {
	    $p = new Produtos();
		
		// Sempre verifica se a query SQL retornou a respectiva coluna
		if(isset($registro["nome"]))
		  $p->nome = $registro["nome"];
		if(isset($registro["preco"]))
		  $p->preco = $registro["preco"];
		if(isset($registro["quantidade"]))
		  $p->quantidade = $registro["quantidade"];

		// Ao final, adiciona o registro como um item do array de retorno
	    $items[] = $p;
	  }
	  
      return $items;
    }
	// Em caso de erro, retorna a mensagem:
	catch(PDOException $e) {
      echo "Erro: ".$e->getMessage();
    }
  }

}
?>

