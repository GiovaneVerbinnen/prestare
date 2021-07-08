<?php
error_reporting(0);
require_once('verifica_login.php');
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="refresh" content="0.5;url=painel.php">
  <title>Prestare - Cadastro Item </title>
  <link rel="stylesheet" href="./assets/bulma.min.css">
</head>

<body>

  <?php
  session_start();

  echo '<h1 class="is-size-5">Redirecionando...</h1> <br />
     <progress class="progress is-small is-primary" max="100">20%</progress>';

  //$conexao = mysqli_connect()('localhost', 'root', '', 'prestare');

  $item = $_POST["item"];
  $mutuario = $_POST["mutuario"];
  $login = $_SESSION['usuario'];

  $sql = "INSERT INTO itens (data_cadastro, item, mutuante, mutuario) VALUES(NOW(), '$item', '$login', '$mutuario')";

  $get_rows = mysqli_affected_rows($conexao);

  if ($get_rows >= 1) {
    echo '<h1 class="is-size-3">Problema na alteração!</h1> <br />
      <a class="button is-block is-warning  " href="index.php" >Voltar</a>';
    die();
  }

  mysqli_query($conexao, $sql) or die('<h1 class="is-size-5">Não conseguimos alterar no banco de dados!</h1> <br />
    <a class="button is-block is-warning  " href="index.php" >Voltar</a>');

  echo 'Alterado com sucesso! <br />
    <a class="button is-warning" href="index.php" >Voltar</a>';
  // mysqli_close($conexao);
  ?>
</body>

</html>