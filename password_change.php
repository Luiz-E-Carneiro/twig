<?php

require_once('inc/banco.php');
require_once('login_verify.php');

$current_pass = $_POST['current_password'] ?? null;
$new_pass = $_POST['new_password'] ?? null;
$verify_pass = $_POST['verify_password'] ?? null;

$login = $_SESSION['user'];

if ($current_pass and $new_pass and $verify_pass) {
    if ($verify_pass != $new_pass) {
        header('location:password_request.php?erro=2');
        exit;
    }
    if ($new_pass != $verify_pass) {
        header('location:password_request.php?erro=3');
        exit;
    }

    $query = $pdo->prepare('SELECT senha FROM usuarios WHERE  login = :login');
    $query->execute([':login' => $login]);
    
    $senha = $query->fetch();



    if(!password_verify($current_pass, $senha[0])){
        header('location:password_request.php?erro=4');
        exit;
    }

    $edit = $pdo->prepare('UPDATE usuarios SET senha = :senha WHERE login = :login');
    $senhaHash = password_hash($new_pass, PASSWORD_DEFAULT);
    $edit->execute([':senha'=> $senhaHash, ':login'=> $login]);
    header('location:compras.php');

} else {
    header('location:password_request.php?erro=1');
}
