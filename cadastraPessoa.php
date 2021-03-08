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
    <meta http-equiv="refresh" content="2;url=index.php">
    <title>Prestare - Cadastro </title>
    <link rel="stylesheet" href="./assets/bulma.min.css">
  </head>
  <body>
<?php

  echo "<h1 class='is-size-3'>Redirecionando...</h1>";

  $conexao = mysqli_connect('localhost', 'root', '', 'prestare');

  $name = $_POST["name"];
  $login = $_POST["login"];
  $password = $_POST["password"];

  $sql_error = "SELECT * FROM pessoas where userLogin='$login'";

  // Validação de User
  $mysql_get_users = mysqli_query($conexao, $sql_error);

  $get_rows = mysqli_affected_rows($conexao);

  if($get_rows >=1){
    echo'<h1 class="is-size-3">Usuário já existe!</h1> <br />
    <a class="button is-block is-warning  " href="index.php" >Voltar</a>';
    die();
    }
  // Cadastra User
  $sql = "INSERT INTO pessoas (userName , userLogin, userPassword) VALUES";
  $sql .= "('$name', '$login', '$password')";

  mysqli_query($conexao, $sql) or die('<h1 class="is-size-5">Não conseguimos cadastrar no banco de dados!</h1> <br />
  <a class="button is-block is-warning  " href="index.php" >Voltar</a>');

  echo 'Cliente cadastrado com sucesso! <br />
  <a class="button is-warning  " href="index.php" >Voltar</a>';

  mysqli_close($conexao);
?>
</script>
</body>
</html>