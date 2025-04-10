<?php

require_once('twig_carregar.php');


echo $twig->render('user_criar.html', [
    'titulo' => 'Novo Usuário'
]);