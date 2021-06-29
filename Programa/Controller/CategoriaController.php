<?php 

require_once("../Model/Conect_BD.php");
require_once("../Model/Categoria.php");
require_once("../Model/CategoriaDAO.php");

class CategoriaController {

private function preparaDados()
	{
	  $categoria = new Categoria();
	  
	  $nome = trim($_POST["nome"]);

	  $categoria->nome = $nome;
	  
	  return $categoria;    
	}

public function controlaConsulta($op) {
		$DAO = new CategoriaDAO();
		$lista = array();
		$listaCategoria = array();
		$numCol = 2;

		switch($op) {
		  case 1:
			$lista = $DAO->Consultar($op, "", "");
			break;
		case 2:
			$listaCategoria = $DAO->Consultar(1, "", "");
			break;
		}
	
		if(count($lista) > 0) {
		  for($i = 0; $i < count($lista); $i++) {
			$nome = $lista[$i]->nome;

			echo "<tr>";
			
			if($nome)
			  echo "<td>$nome</td>";
			  
			  echo "<th class='acoes'><div class='align-bt'><a href='../View/excluirCategoria.php?nome=$nome' class='btn btn-danger' role='button' aria-pressed='true'  onclick='return ConfirmarDelete();'><i class=' fas fa-trash-alt'></i></a></div></th>";
			  
			  echo "</tr>";
			  /*<a href='../View/editarCategoria.php?nome=$nome' class='btn btn-success' role='button' aria-pressed='true'><i class='fas fa-edit'></i></a>*/
			}
		}else if(count($listaCategoria) > 0) {
			echo "<select name='idCategoria' id='idCategoria'>";
			for($i = 0; $i < count($listaCategoria); $i++) {
				$id = $listaCategoria[$i]->id;
			  	$nome = $listaCategoria[$i]->nome;
			  
			  
			  	if($nome){
					echo "<option value='{$id}'>$nome</option>";	
				}
			}
			  	echo "</select>"; 
		}
		else {
		  echo "<tr>";
		  echo "<td colspan=\"$numCol\">Nenhum registro encontrado!</td>";
		  echo "</tr>";
		}
	  }

    public function controlaInsercao() {
		if (isset($_POST["nome"])) {
			$n = $_POST["nome"];
				$DAO  = new CategoriaDAO();
				$nome = $this->preparaDados();
				$result = $DAO->Inserir($nome);
				  if($result == 1)
				  {
					echo"<div class=\"alert alert-success\" role=\"alert\">
            		<b>$n</b> inserido com sucesso!
        			</div>";
				  }
				  else if($result == -1) {
					echo"<div class=\"alert alert-danger\" role=\"alert\">
            		<b>$n</b> já existe, tente novamente!
        			</div>";
				  }	  
				  else {
					$mensagens[] = "ERRO NO BANCO DE DADOS: $DAO->erro";
					$msg = serialize($mensagens);
					header("Location: ../View/cadastrarCategoria.php?msg=$msg");
				  }
				  
				  unset($nome);
			}
	}

	public function controlaAlteracao() {
		if (isset($_POST["nome"])) {
			$n = $_POST["nome"];
				$DAO  = new CategoriaDAO();
				$nome = $this->preparaDados();
				$result = $DAO->Alterar($nome);
				  if($result == 1)
				  {
					echo"<div class=\"alert alert-success\" role=\"alert\">
            		$n alterado com sucesso!
        			</div>";
				  }
				  else if($result == -1) {
					echo"<div class=\"alert alert-danger\" role=\"alert\">
            		$n não existe, tente novamente!
        			</div>";
				  }	  
				  else {
					$mensagens[] = "ERRO NO BANCO DE DADOS: $DAO->erro";
					$msg = serialize($mensagens);
					header("Location: ../View/editarCategoria.php?msg=$msg");
				  }
				  
				  unset($nome);
			}
	}


    public function controlaExclusao($cod) {
		$DAO  = new CategoriaDAO();
		$resultado = array();

		$resultado = $DAO->Consultar(2, "nome", $cod);
		if($resultado) {
			$DAO  = new CategoriaDAO();
			$validar = $DAO->Excluir($cod);
			if($validar) {
				header("location: ../View/mostrarCategoria.php");
			}else {
				echo "<script>alert('SENHA INVÁLIDA');</script>";
				header("location: ../View/mostrarCategoria.php");
			}
		} else {
			
		  }	
		unset($resultado);
	}
}

?>
