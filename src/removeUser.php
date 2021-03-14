<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="refresh" content="2;url=painel.php">
  <title>Prestare - Restrito </title>
  <link rel="stylesheet" href="./assets/bulma.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>

  <?php
  include('conectaBanco.php');

  $sql = "DELETE * where userID=$id";

  $resultado = mysqli_query($conexao, $sql) or die('Não foi possível realizar consulta');

  echo '<h1>deletado</h1>';



  mysqli_close($conexao);

  ?>