<?php

$name = $_POST["name"];
$login = $_POST["login"];
$password = $_POST["password"];

$conexao = mysqli_connect('localhost', 'root', '', 'prestare');

$sql = "insert into pessoas (userName , userLogin, userPassword) values";
$sql .= "('$name', '$login', '$password')";

mysqli_query($conexao, $sql) or die('Não conseguimos cadastrar no banco de dados!');

mysqli_close($conexao);

echo 'Cliente cadastrado com sucesso!'

?>