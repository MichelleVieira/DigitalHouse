<?php

// SUPER GLOBAIS
// $_GET

// echo '<pre>';
// var_dump($_GET);

/* Fizemos com GET
$nome = $_GET['nome_cliente'];
$email = $_GET['email_cliente'];
$telefone = $_GET['telefone_cliente'];

echo "<h1>Nome: $nome</h1>";
echo "<h1>Email: $email</h1>";
echo "<h1>Telefone: $telefone</h1>";
*/

echo '<pre>';
var_dump($_POST);

$nome = $_POST['nome_cliente'];
$email = $_POST['email_cliente'];
$telefone = $_POST['telefone_cliente'];

echo "<h1>Nome: $nome</h1>";
echo "<h1>Email: $email</h1>";
echo "<h1>Telefone: $telefone</h1>";