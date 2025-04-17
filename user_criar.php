<?php
# compras_adc.php
require('inc/banco.php');

$login = $_POST['login'] ?? null;
$senha = $_POST['senha'] ?? null;

if ($login && $senha) {
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $query = $pdo->prepare('INSERT INTO usuarios (login, senha) VALUES (:login, :senha)');

    $query->bindValue(':login', $login);
    $query->bindValue(':senha', $senhaHash);

    $query->execute();
}

header('Location: compras.php');
exit;
