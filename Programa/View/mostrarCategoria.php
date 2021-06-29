<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Cadastro de Produto</title>

<!-- Estilos -->

<link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />

    <link 
    rel="stylesheet" 
    href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" 
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" 
    crossorigin="anonymous"
    />

    <link rel="stylesheet" href="../Include/css/estilo.css">

</head>
<body>

    <script>
      window.onload = load;
    </script>

    <header>
        <input type="checkbox" id="bt_menu">
        <label for="bt_menu">&#9776;</label>

        <nav class="menu">
                <ul>
 
                    <li><a href="logout.php">Login</a></li>
                    <li><a href="menu.php">Home</a></li>
                    <li><a href="#">Categoria</a>
                        <ul> 
                            <li><a href="cadastrarCategoria.php">Cadastrar</a></li>
                            <li><a href="mostrarCategoria.php">Listar</a></li>
                        </ul>
                        </li>
                    <li><a href="#">Produto</a>
                        <ul> 
                            <li><a href="cadastrarProduto.php">Cadastrar</a></li>
                            <li><a href="mostrarProduto.php">Listar</a></li>
                        </ul>
                        </li>
                </ul>    
                <a href="telaPrincipal.html" class="log"><img class="logo" src="../Include/imagens/logo-nome.png"> </a>
        </nav>             
    </header>


    <main>
        <div class="container-fluid">
            <div class="table-responsive-xl table-hover">
                <div class="botao">
                    <button onclick="window.location.href='cadastrarCategoria.php'" class="btn btn-primary">
                        <i class="fa fa-plus-square"></i>Adicionar
                    </button>
                </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Categoria</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include("../include/SessaoValidate.php");  // Faz a autenticação
                        include_once("../controller/CategoriaController.php");
                        $obj = new CategoriaController();
                        $obj->controlaConsulta(1);
                    ?>
                </tbody>
            </table>
            </div>
        </div>
    </main>
    
    <!-- Scripts -->

    <script
    src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"
  ></script>

  <script 
  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"
  ></script>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"
  ></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

  <script src="../Include/js/javascript.js"></script>
</body>
</html>