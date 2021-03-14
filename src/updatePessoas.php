<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="refresh" content="2;url=index.php">
  <title>Prestare - Alterar Cadastro </title>
  <link rel="stylesheet" href="./assets/bulma.min.css">
</head>

<body>

  <?php

  echo "<h1 class='is-size-3'>Redirecionando...</h1>";

  $conexao = mysqli_connect('localhost', 'root', '', 'prestare');

  $id = $_POST["id"];
  $name = $_POST["name"];
  $login = $_POST["login"];
  $password = $_POST["password"];

  $sql = "UPDATE pessoas set userLogin='$login', userName='$name', userPassword='$password' where userID='$id'";

  $get_rows = mysqli_affected_rows($conexao);

  if ($get_rows >= 1) {
    echo '<h1 class="is-size-3">Problema na alteração!</h1> <br />
      <a class="button is-block is-warning  " href="index.php" >Voltar</a>';
    die();
  }

  mysqli_query($conexao, $sql) or die('<h1 class="is-size-5">Não conseguimos alterar no banco de dados!</h1> <br />
    <a class="button is-block is-warning  " href="index.php" >Voltar</a>');

  mysqli_close($conexao);

  echo 'Alterado com sucesso! <br />
    <a class="button is-warning  " href="index.php" >Voltar</a>';
  ?>
</body>

</html>