<?php
require_once('twig_carregar.php');
require_once('inc/banco.php');


if($_POST['login'] != '' && $_POST['senha'] != '') {
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    
    $compr = $pdo->prepare('SELECT * FROM usuarios WHERE login = :login AND senha = :senha');
    $compr->execute([
        ':login'=> $login,
        ':senha'=> $senha
    ]);
    $login = $compr->fetch();

    if($login == null){
        echo '13';
    }
    die();

}