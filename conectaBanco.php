<?php

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$dotenv->required(['DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASS']);

echo $_ENV['DB_HOST'],
$_ENV['DB_NAME'],
$_ENV['DB_USER'],
$_ENV['DB_PASS'];

$conexao = mysqli_connect(
    $_ENV['DB_HOST'],
    $_ENV['DB_USER'],
    $_ENV['DB_PASS'],
    $_ENV['DB_NAME'],
)
    or die('Não conseguimos conectar no banco de dados!');
isset()