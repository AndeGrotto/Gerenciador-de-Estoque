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
<body class="fotocadastro">

    <script>
      window.onload = load;
    </script>

    <header>
       <!-- Cabeçalho Menu --> 
    </header>
    <main>
        <div class="_containerCadastroProduto">
            <img class="imgcadastro" src="../Include/imagens/avatarCadastro.png"> 
            <!--<h3>Login Estoque</h3>-->    
            <form action="cadastrarProduto.php" method="POST">

                <div class="form-group">
                    <i class="fas fa-barcode"></i>
                    <input type="text" minlength="1" maxlength="20" class="codigo form-control font" id="codigo" name="codigo" title="Digite o código" placeholder="Código" required>
                </div>

                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <input type="text" minlength="3" maxlength="30" class="form-control font" id="nome" name="nome" title="Digite o nome do produto" placeholder="Nome" required>
                </div>
        
                <div class="form-group">
                    <i class="fas fa-dollar-sign"></i>
                    <input type="text" minlength="1" maxlength="30" class="preco form-control font" id="preço" name="preco" title="Digite o valor" placeholder="Preço" required>
                </div>

                <div class="form-group">
                    <i class="fas fa-sort-amount-up"></i>
                    <input type="text" minlength="1" maxlength="30" class="quantidade form-control font" id="quantidade" name="quantidade" title="Digite a quantidade" placeholder="Quantidade" required>
                </div>

                <div class="form-group grid">
                    <input class="form-control cadastro" name="cadastrarProduto" type="submit" value="Adicionar">
                    <input class="form-control cadastro" type="button" name="voltarProduto" value="Voltar" onclick="window.location.href='mostrarProduto.php'">
                </div>
            </form>
            <?php
                include("../include/SessaoValidate.php");  // Faz a autenticação
                include_once("../Controller/ProdutoController.php");
                $obj = new ProdutoController();
                $obj->controlaInsercao();
            ?>
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