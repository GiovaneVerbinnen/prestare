<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Prestare - Cadastro </title>
  <link rel="stylesheet" href="./assets/bulma.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
  <style>
    @import url('./assets/Engagement-Regular.ttf');
    @import url('https://fonts.googleapis.com/css2?family=Engagement&display=swap');
  </style>
  <section class="hero has-background-link-light is-fullheight">
    <div class="hero-body">
      <div class="container">
        <div class=" ">
          <div class="box ">
            <h1 class="title has-text-grey-dark  has-text-centered " style="font-size:5rem;font-family: 'Engagement', cursive;">Cadastro</h1>
            <hr>

            <div class="columns ">
              <!-- <div class="column ">
                        </div> -->
              <div class="column has-text-centered ">
                <img src="assets/profile.png" alt="img" style="max-width: 400px; ">
              </div>
              <div class="column is-4 is-offset-0">
                <form action="cadastraPessoa.php" method="POST" style="has-text-centered">
                  <div class="field">
                    <label class="label">Nome</label>
                    <div class="control">
                      <input class="input" type="text" placeholder="Nome" name="name" required="required">
                    </div>
                  </div>

                  <div class="field">
                    <label class="label">Login</label>
                    <div class="control">
                      <input class="input" type="text" placeholder="Login" name="login" required="required">
                    </div>
                  </div>
                  <div class="field">
                    <label class="label">Senha</label>
                    <div class="control">
                      <input class="input" type="password" placeholder="Senha" name="password" required="required">
                    </div>
                  </div>
                  <div class="field is-grouped">
                    <div class="control">
                      <button class="button is-link" type="submit">Cadastrar</button>
                    </div>
                    <div class="control">
                      <button class="button is-danger" href="index.php">Cancela</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="column is-2">

              </div>
            </div>
          </div>
        </div>
  </section>

  <?php
  require('rodape.php');
  ?>