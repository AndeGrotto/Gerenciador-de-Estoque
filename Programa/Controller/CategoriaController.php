<?php 

require_once("../Model/Conect_BD.php");
require_once("../Model/Categoria.php");
require_once("../Model/CategoriaDAO.php");

class CategoriaController {

public function controlaConsulta($op) {
		$DAO = new CategoriaDAO();
		$lista = array();
		$numCol = 3;

		switch($op) {
		  case 1:
			$lista = $DAO->Consultar($op, "", "");
			break;
		}
	
		if(count($lista) > 0) {
		  for($i = 0; $i < count($lista); $i++) {
			$nome = $lista[$i]->nome;

			echo "<tr>";
			
			if($nome)
			  echo "<td>$nome</td>";
			  
			  echo "<th class='acoes'><div class='align-bt'><a href='../View/editarCategoria.php?nome=$nome' class='btn btn-success' role='button' aria-pressed='true'><i class='fas fa-edit'></i></a>
			  <a href='../View/excluirCategoria.php?nome=$nome' class='btn btn-danger' role='button' aria-pressed='true'  onclick='return ConfirmarDelete();'><i class=' fas fa-trash-alt'></i></a></div></th>";
		  
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
		$categoria = new Categoria();
		
		$nome = trim($_POST["nome"]);

		$categoria->nome = $nome;
		
		return $categoria;    
	  }

    public function controlaInsercao() {
		if (isset($_POST["nome"])) {

				$DAO  = new CategoriaDAO();
				$nome = $this->preparaDados();
				$result = $DAO->Inserir($nome);
				  if($result == 1)
				  {
					echo "<p class=\"sucesso fa-blink\">CATEGORIA INSERIDA COM SUCESSO!</p>";
				  }
				  else if($result == -1) {
					echo "<p class=\"erro fa-blink\">CATEGORIA JÁ EXISTE, TENTE NOVAMENTE!</p>";
				  }	  
				  else {
					$mensagens[] = "ERRO NO BANCO DE DADOS: $DAO->erro";
					$msg = serialize($mensagens);
					header("Location: ../View/cadastrarCategoria.php?msg=$msg");
				  }
				  
				  unset($categoria);
			}
	}

    public function controlaExclusao($cod) {
		echo $cod;
		$DAO  = new CategoriaDAO();
		$resultado = array();
		$resultado = $DAO->Consultar(2, "nome", $cod);
		echo "Opaaaa:   $resultado";
		if($resultado) {
			$DAO  = new CategoriaDAO();
			$validar = $DAO->Excluir($cod);
			if($validar) {
				echo "<p class=\"sucesso fa-blink\">CATEGORIA DELETADA COM SUCESSO!</p>";
				header("location: ../View/mostrarCategoria.php");
			}else {
				echo "<p class=\"erro fa-blink\">NÃO FOI POSSÍVEL EXCLUIR A CATEGORIA, TENTE NOVAMENTE!</p>";
			}
		}
	}

}
echo "<script type=\"text/javascript\" src=\"../Include/js/javascript.js\"></script>";

?>
