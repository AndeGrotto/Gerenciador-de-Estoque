<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Gerenciador de Estoque</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link 
      rel="stylesheet" 
      href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" 
      integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" 
      crossorigin="anonymous"
    />

    <style>
    body,
    .signin {
      height: 100vh;
    }

    .signin {
      display: flex;
      align-items: center;
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #f5f5f5;
    }

    .form-signin {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: auto;
    }

    .form-signin .checkbox {
      font-weight: 400;
    }

    .form-signin .form-floating:focus-within {
      z-index: 2;
    }

    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
</style>

  </head>

<body>

<?php
    include_once("../Controller/LoginController.php");
    $obj = new LoginController();
    $obj->controlaConsulta();
  ?>


<div class="signin text-center">
  <main class="form-signin">
  <form action="login.php" method="POST">
      




<svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="70.000000pt" height="70.000000pt" viewBox="0 0 128.000000 128.000000" preserveAspectRatio="xMidYMid meet">
    <g transform="translate(0.000000,128.000000) scale(0.100000,-0.100000)" fill="#0D6EFD" stroke="none">
        <path d="M647 1274 c-4 -4 -7 -18 -7 -31 0 -22 -3 -23 -83 -23 -57 0 -89 -5 -104 -15 -16 -12 -65 -15 -234 -17 l-214 -3 -3 -77 c-3 -69 -1 -77 18 -83 18 -6 20 -14 20 -110 0 -94 -2 -103 -20 -108 -18 -5 -20 -14 -20 -82 0 -68 2 -77 20 -82 18 -5 20 -14 20 -108 0 -95 -2 -104 -20 -110 -18 -6 -20 -15 -20 -82 0 -66 2 -75 20 -80 19 -5 20 -14 20 -122 0 -64 4 -122 8 -129 7 -10 137 -12 618 -10 l609 3 3 599 c2 473 0 601 -10 608 -7 4 -45 8 -85 8 -71 0 -72 0 -75 28 l-3 27 -226 3 c-124 1 -228 -1 -232 -4z m413 -79 l0 -35 -185 0 -185 0 0 35 0 35 185 0 185 0 0 -35z m-418 -52 l3 -28 230 0 230 0 3 28 c3 26 5 27 68 27 l64 0 -2 -562 -3 -563 -372 -3 -373 -2 0 565 0 565 74 0 c74 0 75 0 78 -27z m-412 -33 l0 -40 -90 0 -90 0 0 40 0 40 90 0 90 0 0 -40z m220 0 l0 -40 -85 0 -85 0 0 40 0 40 85 0 85 0 0 -40z m-220 -153 c0 -36 5 -68 12 -75 8 -8 47 -12 111 -12 l98 0 -3 -27 -3 -28 -177 -3 -178 -2 0 105 0 105 70 0 70 0 0 -63z m220 13 l0 -50 -85 0 -85 0 0 50 0 50 85 0 85 0 0 -50z m-5 -245 l0 -40 -82 -3 -83 -3 0 46 0 46 83 -3 82 -3 0 -40z m-215 0 l0 -35 -90 0 -90 0 0 35 0 35 90 0 90 0 0 -35z m2 -157 l3 -73 108 -3 107 -3 0 -29 0 -30 -180 0 -180 0 0 105 0 105 70 0 69 0 3 -72z m218 22 l0 -50 -85 0 -85 0 0 50 0 50 85 0 85 0 0 -50z m-220 -250 l0 -40 -90 0 -90 0 0 40 0 40 90 0 90 0 0 -40z m220 0 l0 -40 -85 0 -85 0 0 40 0 40 85 0 85 0 0 -40z m-220 -153 c0 -36 5 -68 12 -75 8 -8 47 -12 110 -12 98 0 98 0 98 -25 l0 -25 -180 0 -180 0 0 100 0 100 70 0 70 0 0 -63z m220 13 l0 -50 -85 0 -85 0 0 50 0 50 85 0 85 0 0 -50z"/>
        <path d="M613 1043 c-9 -3 -13 -28 -13 -74 l0 -70 73 3 72 3 3 58 c2 35 -2 64 -9 73 -11 14 -98 19 -126 7z m87 -73 c0 -27 -3 -30 -30 -30 -27 0 -30 3 -30 30 0 27 3 30 30 30 27 0 30 -3 30 -30z"/>
        <path d="M810 1025 l0 -25 160 0 160 0 0 25 0 25 -160 0 -160 0 0 -25z"/>
        <path d="M810 940 c0 -19 7 -20 120 -20 113 0 120 1 120 20 0 19 -7 20 -120 20 -113 0 -120 -1 -120 -20z"/>
        <path d="M604 776 c-3 -7 -4 -40 -2 -72 l3 -59 64 -3 c74 -4 81 2 81 70 0 74 -3 78 -76 78 -45 0 -66 -4 -70 -14z m96 -66 c0 -27 -3 -30 -30 -30 -27 0 -30 3 -30 30 0 27 3 30 30 30 27 0 30 -3 30 -30z"/>
        <path d="M810 770 c0 -19 7 -20 160 -20 153 0 160 1 160 20 0 19 -7 20 -160 20 -153 0 -160 -1 -160 -20z"/>
        <path d="M810 680 c0 -19 7 -20 120 -20 113 0 120 1 120 20 0 19 -7 20 -120 20 -113 0 -120 -1 -120 -20z"/>
        <path d="M600 462 c0 -79 3 -82 80 -82 61 0 72 13 68 87 l-3 58 -72 3 -73 3 0 -69z m100 -2 c0 -27 -3 -30 -30 -30 -27 0 -30 3 -30 30 0 27 3 30 30 30 27 0 30 -3 30 -30z"/>
        <path d="M810 510 c0 -19 7 -20 160 -20 153 0 160 1 160 20 0 19 -7 20 -160 20 -153 0 -160 -1 -160 -20z"/>
        <path d="M812 428 c3 -22 6 -23 118 -23 108 0 115 1 115 20 0 19 -8 20 -118 23 -118 3 -118 3 -115 -20z"/>
        <path d="M607 273 c-4 -3 -7 -37 -7 -75 l0 -69 73 3 72 3 3 58 c2 35 -2 64 -9 73 -12 14 -119 20 -132 7z m93 -73 c0 -27 -3 -30 -30 -30 -27 0 -30 3 -30 30 0 27 3 30 30 30 27 0 30 -3 30 -30z"/>
        <path d="M810 255 l0 -25 160 0 160 0 0 25 0 25 -160 0 -160 0 0 -25z"/>
        <path d="M810 170 c0 -19 7 -20 120 -20 113 0 120 1 120 20 0 19 -7 20 -120 20 -113 0 -120 -1 -120 -20z"/>
    </g>
</svg>

      <h1 class="h3 mb-3 mt-3 fw-normal">Faça login no sistema</h1>

      <div class="form-floating">
        <input type="text" class="form-control font" minlength="3" maxlength="30" id="usuario" name="usuario" title="Usuário padrão da biblioteca" placeholder="Usuário" required>
        <label for="floatingInput">Usuário</label>
      </div>
      <div class="form-floating">
      <input type="password" class="form-control font" minlength="3" maxlength="30" id="senha" name="senha" title="Senha padrão da biblioteca" placeholder="Password" required>
        <label for="floatingPassword">Senha</label>
      </div>

      <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-muted">&copy; Acadêmicos da UPF</p>
    </form>
  </main>
</div>

<?php require '__footer.phtml'; ?>

