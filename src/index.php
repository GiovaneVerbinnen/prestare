<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Prestare - Login </title>
  <link rel="stylesheet" href="../assets/bulma.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
  <style>
    @import url('../assets/Engagement-Regular.ttf');
    @import url('https://fonts.googleapis.com/css2?family=Engagement&display=swap');
  </style>
  <section class="hero has-background-link-light is-fullheight">
    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="column is-8 is-offset-2">
          <div class="box ">
            <h1 class="title has-text-grey-dark " style="font-size:5rem;font-family: 'Engagement', cursive;">login</h1>
            <hr>
            <?php
            // if (isset($_SESSION['nao_autenticado'])) :
            ?>
            <div class="notification is-danger">
              <!-- <p>ERRO: Usuário ou senha inválidos.</p> -->
            </div>
            <?php
            // endif;
            // unset($_SESSION['nao_autenticado']);
            ?>
            <div class="columns">
              <div class="column">
                <img src="../assets/login.png" alt="">
              </div>
              <div class="column is-flex is-align-items-center">
                <form action="login.php" method="POST">
                  <div class="field">
                    <div class="control">
                      <input name="usuario" class="input is-large" placeholder="Seu usuário" autofocus="" required="required">
                    </div>
                  </div>

                  <div class="field">
                    <div class="control">
                      <input name="senha" class="input is-large" type="text" placeholder="Sua senha" required="required">
                    </div>
                  </div>

                  <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                  <div class="field">
                    <p class="my-2">Não tem uma conta ainda?</p>
                    <a class="is-size-5" href="formCadPessoa.php">Cadastrar</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>