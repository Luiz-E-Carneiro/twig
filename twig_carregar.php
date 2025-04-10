<?php
// twig_carregar.php

// Carrega o carregador do Composer
require_once('vendor/autoload.php');

// Loader é quem carrega os arquivos HTML
$loader = new \Twig\Loader\FilesystemLoader('./templates');

// Criar o objeto do Twig
$twig = new \Twig\Environment($loader);

session_start();

// if (!isset($_SESSION['user'])) {

//     header('location:login.php');
        
// }
