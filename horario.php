<?php

require_once('login_verify.php');
require('twig_carregar.php');

date_default_timezone_set('America/Sao_Paulo');

use Carbon\Carbon;

$today = Carbon::now()->format('d-m-Y s-i-h');
$tomorrow = Carbon::now()->addDay(1)->format('d-m-Y s-i-h');


echo $twig->render('horario.html', [
    'titulo' => 'Horario',
    'hoje' => $today,
    'amanha' => $tomorrow,
    'user'=> $_SESSION['user']
]);