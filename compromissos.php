<?php
require_once('twig_carregar.php');
require('inc/banco.php');

require_once('login_verify.php');

require_once('vendor/autoload.php');
date_default_timezone_set('America/Sao_Paulo');

use Carbon\Carbon;

$dados = $pdo->query('SELECT * FROM compromissos');

if(isset($_GET['ordem'])){
    if($_GET['ordem'] == 'ord_alf'){
        $dados = $pdo->query('SELECT * FROM compromissos ORDER BY titulo');
    }else {
        $dados = $pdo->query('SELECT * FROM compromissos ORDER BY data');
    }
}else {
    $dados = $pdo->query('SELECT * FROM compromissos');
}
$compromissos = $dados->fetchAll(PDO::FETCH_ASSOC);

foreach ($compromissos as &$compr) {
    $date = $compr['data'];
    $carbonData = Carbon::createFromDate($date);
    if($carbonData->isWeekend()){
        $compr['weekend'] = true;
    }else {
        $compr['weekend'] = false;
    }
    $compr['data'] = $carbonData->format('d-m-Y');

    
}
unset($compr);

echo $twig->render('compromissos.html', [
    'titulo' => 'Compromissos',
    'compromissos' => $compromissos,
    'user'=> $_SESSION['user']
]);
