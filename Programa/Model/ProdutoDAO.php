<?php
class ProdutoDAO {

  public $p = null;
  public $erro = null;
  

  public function __construct() {
    $this->p = new Conect_BD();
	$this->p->exec("set names utf8"); 
  }
  

  public function Inserir($produto){
    try {
      $stmt = $this->p->query("SELECT * FROM produto WHERE codigo = '$produto->codigo' OR nome = '$produto->nome'");
      if($stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT))
	    return -1;

      $stmt = $this->p->prepare("INSERT INTO produto(codigo, nome, preco, quantidade, idCategoria) VALUES (?, ?, ?, ?, ?)");

    $this->p->beginTransaction();
    $stmt->bindValue(1, $produto->codigo);
    $stmt->bindValue(2, $produto->nome);
    $stmt->bindValue(3, $produto->preco);
    $stmt->bindValue(4, $produto->quantidade);
    $stmt->bindValue(5, $produto->idCategoria);

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

  public function Consultar($op, $param, $value) {
    try {
	  $items = array();

    switch($op)
      {
        case 1:
          $query = "SELECT * FROM produto";
          break;   
      }    
	  
      if($query != null)
        $stmt = $this->p->query($query);
      else
        $stmt = $this->p->query("SELECT * FROM produto");
		
	  $this->p = null;
	  
	  while($registro = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT))
	  {
	    $p = new Produto();
		
		// Sempre verifica se a query SQL retornou a respectiva coluna
    if(isset($registro["codigo"]))
		  $p->codigo = $registro["codigo"];
		if(isset($registro["nome"]))
		  $p->nome = $registro["nome"];
		if(isset($registro["preco"]))
		  $p->preco = $registro["preco"];
		if(isset($registro["quantidade"]))
		  $p->quantidade = $registro["quantidade"];
    if(isset($registro["idCategoria"]))
		  $p->idCategoria = $registro["idCategoria"];

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

  public function Alterar($produto) {
    try {
      $stmt = $this->p->prepare("UPDATE produto SET codigo=?, nome=?, preco=?, quantidade=? WHERE id=?");
      // Inicia a transação
      $this->p->beginTransaction();
      // Vincula um valor a um parâmetro da sentença SQL, na ordem
      $stmt->bindValue(1, $produto->codigo);
      $stmt->bindValue(2, $produto->nome);
      $stmt->bindValue(3, $produto->preco);
      $stmt->bindValue(4, $produto->quantidade);
      $stmt->bindValue(5, $produto->codigo);
    
      // Executa a query
      $stmt->execute();
    
      // Grava a transação
      $this->p->commit();
    
      // Fecha a conexão DAO
      $this->p = null;

      return true;
    }
    // Em caso de erro, retorna a mensagem:
    catch(PDOException $e) {
      $this->erro = "Erro: " . $e->getMessage();
    return false;
    }
  }

  public function Excluir($cod) {
    try {
      $stmt = $this->p->prepare("DELETE FROM produto WHERE codigo=?");

      $this->p->beginTransaction();

      $stmt->bindValue(1, $cod);
    

      $stmt->execute();
      $this->p->commit();
      $this->p = null;

      return true;
    }

    catch(PDOException $e) {
      $this->erro = "Erro: " . $e->getMessage();
      return false;
    }
  }
 
}
?>

