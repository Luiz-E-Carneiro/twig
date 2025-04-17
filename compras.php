<?php
// compras.php
require_once('twig_carregar.php');
require('inc/banco.php');
require_once('login_verify.php');

// Busca as compras no banco
$dados = $pdo->query('SELECT * FROM compras');

$comp = $dados->fetchAll(PDO::FETCH_ASSOC);

echo $twig->render('compras.html', [
    'titulo' => 'Compras',
    'compras' => $comp,
    'user'=> $_SESSION['user']
]);