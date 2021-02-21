<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prestare</title>
    <link rel="stylesheet" href="bulma.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  </head>
  <body>
<style>
@import url('./assets/Engagement-Regular.ttf');
@import url('https://fonts.googleapis.com/css2?family=Engagement&display=swap');
</style>


 <nav class="navbar is-primary" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="/prestare/index.php">
     <h1 class="is-size-1" style="font-family: 'Engagement', cursive;">Prestare</h1>
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="index.php">
        Inicio
      </a>
      <a class="navbar-item" href="admin.php">
            Administração
          </a>
      <a class="navbar-item" href="relatorios.php">
        Relatórios
      </a>
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link" >
          Cadastros
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item" href="cadPessoa.php">
            Pessoas
          </a>
          <a class="navbar-item" href="cadObjeto.php">
            Objetos
          </a>
        </div>
      </div>

    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-light" href="login.php">
            Entrar
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>