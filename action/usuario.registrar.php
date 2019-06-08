<?php

require_once('../class/UsuarioDAO.php');

$usuario = new Usuario();

$usuario -> email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$usuario -> senha = filter_var($_POST['senha'], FILTER_SANITIZE_STRING);
$usuario -> nome_completo = filter_var($_POST['nome_completo'], FILTER_SANITIZE_STRING);
$usuario -> cpf = filter_var($_POST['cpf'], FILTER_SANITIZE_STRING);
$usuario -> telefone = filter_var($_POST['telefone'], FILTER_SANITIZE_STRING);

$usuariodao = new UsuarioDAO();

$usuariodao -> store($usuario);

header('location: ../login.php');

?>
