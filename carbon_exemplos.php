<?php


require_once('vendor/autoload.php');
date_default_timezone_set('America/Sao_Paulo');

use Carbon\Carbon;

echo Carbon::now()->format('d-m-Y s:i:H') . '<br>';

echo Carbon::now()->addDay(1). '<br>';
echo Carbon::now()->subWeek(100). '<br>';

echo 'Próximas Olimpídas em ' . Carbon::createFromDate(2024)->addYear(4)->year . '<br>';

echo "Sua idade é: ". 
    Carbon::createFromDate(0, 12, 27)->age . ' anos';


if (Carbon::now()->isWeekend()) {
    echo 'Festa!';
} else {
    echo 'Trabalho!';
}

$nascimento = Carbon::createFromDate(2012,1,1);
echo 'Diferença de data: ' . Carbon::now()->diff($nascimento);