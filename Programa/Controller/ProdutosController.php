<?php

require_once("../Model/Conect_BD.php");
require_once("../Model/Produtos.php");
require_once("../Model/ProdutosDAO.php");

class ProdutosController {

	public function controlaConsulta($op) {
		$DAO = new ProdutosDAO();
		$lista = array();
		$numCol = 3;
		
		switch($op) {
		  case 1:
			$lista = $DAO->Consultar();
			break;
		/*case 2:
			$lista = $DAO->Excluir(4);
			break;*/
		}
	
		if(count($lista) > 0) {
		  for($i = 0; $i < count($lista); $i++) {
			$nome   = $lista[$i]->nome;
			$preco   = $lista[$i]->preco;
			$quantidade = $lista[$i]->quantidade;
			
			echo "<tr>";
			
			if($nome)
			  echo "<td>$nome</td>";
			if($preco)
			  echo "<td>$preco</td>";
			if($quantidade)
			  echo "<td>$quantidade</td>";

			  echo "<th class=\"acoes\"><a href=\"../View/cadastrarLivros.php\" class=\"btn btn-primary btn active\" role=\"button\" aria-pressed=\"true\"><i class=\"icone fas fa-plus-square\"></i>Inserir</a>";
			  echo "<a href=\"#\" class=\"btn btn-danger\" role=\"button\" aria-pressed=\"true\"><i class=\"icone fas fa-trash-alt\"></i>Excluir</a></th>";


			echo "</tr>";
		  }
		}
		else {
		  echo "<tr>";
		  echo "<td colspan=\"$numCol\">Nenhum registro encontrado!</td>";
		  echo "</tr>";
		}
	  }

    public function controlaInsercao() {
		if (isset($_POST['cadastrarProduto'])) {
			if (strlen($_POST['nome']) >= 1 && strlen($_POST['preco']) >= 1 && strlen($_POST['quantidade']) >= 1) {

				$mensagens = array();
				$nome = trim($_POST["nome"]);
				$preco = trim($_POST["preco"]);
				$quantidade = trim($_POST["quantidade"]);

		  		$produtos = new Produtos();
		  		$produtos->nome = $nome;
				$produtos->preco = $preco;
		  		$produtos->quantidade = $quantidade;

				$DAO  = new ProdutosDAO();
				$resultado = $DAO->Inserir($produtos);

				if($resultado == 1) {
					echo "<p class=\"sucesso fa-blink\">PRODUTO INSERIDO COM SUCESSO!</p>";
				  }
				  else if($resultado == -1) {
					echo "<p class=\"erro fa-blink\">PRODUTO JÁ EXISTE, TENTE NOVAMENTE!</p>";
				  }	  
				  else {
					$mensagens[] = "ERRO NO BANCO DE DADOS: $DAO->erro";
					$msg = serialize($mensagens);
					header("Location: ../View/cadastrarProdutos.php?msg=$msg");
				  }
				  
				  unset($nome);
			}
	    }
	}

}
?>