<?php 

require_once("../Model/Conect_BD.php");
require_once("../Model/Produto.php");
require_once("../Model/ProdutoDAO.php");

class ProdutoController {

	public function controlaConsulta($op) {
		$DAO = new ProdutoDAO();
		$lista = array();
		$numCol = 3;

		switch($op) {
		  case 1:
			$lista = $DAO->Consultar($op, "", "");
			break;
		}
	
		if(count($lista) > 0) {
		  for($i = 0; $i < count($lista); $i++) {
			$codigo = $lista[$i]->codigo;
			$nome = $lista[$i]->nome;
			$preco = $lista[$i]->preco;
			$quantidade = $lista[$i]->quantidade;
			
			echo "<tr>";
			
			if($codigo)
			  echo "<td>$codigo</td>";
			if($nome)
			  echo "<td>$nome</td>";
			if($preco)
			  echo "<td>$preco</td>";
			if($quantidade)
			  echo "<td>$quantidade</td>";
			  
			  echo "<th class='acoes'><div class='align-bt'><a href='../View/editarProduto.php?codigo=$codigo&nome=$nome&preco=$preco&quantidade=$quantidade' class='btn btn-success' role='button' aria-pressed='true'><i class='fas fa-edit'></i></a>
			  <a href='../View/excluirProduto.php?codigo=$codigo' class='btn btn-danger' role='button' aria-pressed='true'  onclick='return ConfirmarDelete();'><i class=' fas fa-trash-alt'></i></a></div></th>";
		  
			  echo "</tr>";
			}
		}
		else {
		  echo "<tr>";
		  echo "<td colspan=\"$numCol\">Nenhum registro encontrado!</td>";
		  echo "</tr>";
		}
	  }

	  private function preparaDados()
	  {
		$produto = new Produto();
		
		$codigo = trim($_POST["codigo"]);
		$nome = trim($_POST["nome"]);
        $preco = trim($_POST["preco"]);
		$quantidade = trim($_POST["quantidade"]);

		$produto->codigo = $codigo;
		$produto->nome = $nome;
		$produto->preco = $preco;
		$produto->quantidade = $quantidade;
		
		return $produto;    
	  }

    public function controlaInsercao() {
		if (isset($_POST['preco']) >= 1 && isset($_POST['preco']) >= 1 && isset($_POST['quantidade']) >= 1) {

				$DAO  = new ProdutoDAO();
				$produto = $this->preparaDados();
				$result = $DAO->Inserir($produto);
				  if($result == 1)
				  {
					echo "<p class=\"sucesso fa-blink\">PRODUTO INSERIDO COM SUCESSO!</p>";
				  }
				  else if($result == -1) {
					echo "<p class=\"erro fa-blink\">PRODUTO JÁ EXISTE, TENTE NOVAMENTE!</p>";
				  }	  
				  else {
					$mensagens[] = "ERRO NO BANCO DE DADOS: $DAO->erro";
					$msg = serialize($mensagens);
					header("Location: ../View/cadastrarProduto.php?msg=$msg");
				  }
				  
				  unset($Produto);
			}
	}


	public function controlaAlteracao() {
		
		if (isset($_GET['codigo']) && isset($_GET['nome']) && isset($_GET['preco']) && isset($_GET['quantidade'])) {
			echo "Chegando antes";
			$DAO  = new ProdutoDAO();
			$produto = new Produto();
		
			$codigo = trim($_GET["codigo"]);
			$nome = trim($_GET["nome"]);
        	$preco = trim($_GET["preco"]);
			$quantidade = trim($_GET["quantidade"]);

			$produto->codigo = $codigo;
			$produto->nome = $nome;
			$produto->preco = $preco;
			$produto->quantidade = $quantidade;

			$result = $DAO->Alterar($produto);
			

		unset($produto);
		}
	}

	public function controlaExclusao($cod) {
		$DAO  = new ProdutoDAO();
		$resultado = array();

		$resultado = $DAO->Consultar(2, "codigo", $cod);
		echo $resultado;
		if($resultado) {
			$DAO  = new ProdutoDAO();
			$validar = $DAO->Excluir($cod);
			if($validar) {
				echo "<p class=\"sucesso fa-blink\">Produto DELETADO COM SUCESSO!</p>";
				header("location: ../View/mostrarProduto.php");
			}else {
				echo "<p class=\"erro fa-blink\">NÃO FOI POSSÍVEL EXCLUIR O PRODUTO, TENTE NOVAMENTE!</p>";
			}
		}
	}

}
echo "<script type=\"text/javascript\" src=\"../Include/js/javascript.js\"></script>";

?>
