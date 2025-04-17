<?php

require_once('login_verify.php');

// Carrega o carregador do Twig
require_once('twig_carregar.php');


// Mostra o template na tela
echo $twig->render('password_change.html', [
    'titulo' => 'Trocar Senha'
]);