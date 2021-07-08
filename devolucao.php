<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="refresh" content="2;url=painel.php">
  <title>Prestare - Devolução </title>
  <link rel="stylesheet" href="./assets/bulma.min.css">
</head>

<body>
  <section class="hero has-background-white-light is-fullheight">
    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="column is-8 is-offset-2">
          <?php

          $data = $_POST["data"];
          $item = $_POST["item"];
          echo '<h1 class="is-size-3 has-text-danger">Redirecionando...</h1> <br />
            <progress class="progress is-small is-primary" max="100">20%</progress>';

          //$conexao = mysqli_connect()('localhost', 'root', '', 'prestare');

          if ($data == '0000-00-00 00:00:00.000000') {
            $sql = "UPDATE itens set data_devolucao=NOW() where item_id='$item'";

            $get_rows = mysqli_affected_rows($conexao);

            if ($get_rows >= 1) {
              echo '<h1 class="is-size-3">Problema na alteração!</h1> <br />
              <a class="button is-block is-warning  " href="painel.php" >Voltar</a>';
              die();
            }
            mysqli_query($conexao, $sql) or die('<h1 class="is-size-5">Não conseguimos alterar no banco de dados!</h1> <br />
            <a class="button is-block is-warning  " href="painel.php" >Voltar</a>');

            echo 'Alterado com sucesso! <br />
            <a class="button is-warning  " href="painel.php" >Voltar</a>';
          } else {
            echo '<h1 class="is-size-3">Item já Devolvido.</h1> <br />';
          }
          // mysqli_close($conexao);

          ?>
        </div>
      </div>
    </div>
  </section>
</body>

</html>