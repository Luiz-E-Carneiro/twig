<?php
require_once('twig_carregar.php');
require_once('inc/banco.php');

if ($_POST['login'] != '' && $_POST['senha'] != '') {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $query = $pdo->prepare('SELECT * FROM usuarios WHERE login = :login');
    $query->execute([':login' => $login]);
    $usuario = $query->fetch();

    if ($usuario && password_verify($senha, $usuario['senha'])) {
        session_start();
        $_SESSION['user'] = $login;
        header('location:compras.php');
        exit;
    } else {
        echo "Usuário ou senha inválidos.";
    }
}
