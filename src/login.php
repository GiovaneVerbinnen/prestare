
<?php
session_start();


include('conectaBanco.php');

if (empty($_POST['usuario']) || empty($_POST['senha'])) {
  header('Location: index.php');
  exit();
}

$login = mysqli_real_escape_string($conexao, $_POST['usuario']);
$password = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select userLogin from pessoas where userLogin = '$login' and userPassword = '$password'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
  $_SESSION['usuario'] = $login;
  header('Location: painel.php');
  exit();
} else {
  $_SESSION['nao_autenticado'] = true;
  header('Location: index.php');
  exit();
}

?>

