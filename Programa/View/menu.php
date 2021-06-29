<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Menu</title>

<!-- Estilos -->
<link rel="stylesheet" href="../Include/css/menu.css">

</head>
<body>

	<script>
      window.onload = load;
    </script>

  <a href="login.html" class="logo" target="_blank">
		<img src="../Include/imagens/logo.png" alt="">
	</a>

  	<input class="menu-icon" type="checkbox" id="menu-icon" name="menu-icon"/>
  	<label for="menu-icon"></label>
  	<nav class="nav"> 		
  		<ul class="pt-5">
  			<li><a href="logout.php">Login</a></li>
            <li><a href="cadastrarCategoria.php">Cadastrar Categoria</a></li>
			<li><a href="cadastrarProduto.php">Cadastrar Produtos</a></li>
			<li><a href="mostrarCategoria.php">Lista de Categoria</a></li>
            <li><a href="mostrarProduto.php">Lista de produtos</a></li>
  		</ul>
  	</nav>

  	<div class="section-center">
  		<h1 class="mb-0">Menu do Estoque</h1>
  	</div>

	<script src="../Include/js/javascript.js"></script>
</body>
</html>

