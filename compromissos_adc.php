<?php
require('inc/banco.php');

$compr = $_POST['titulo'] && $_POST['data'];

if ($compr) {
    $titulo = $_POST['titulo'];
    $data = $_POST['data'];


    $query = $pdo->prepare('INSERT INTO compromissos (titulo, data) VALUES (:titulo, :data)');

    $query->bindValue(':titulo', $titulo);
    $query->bindValue(':data', $data);

    $query->execute();
    
}

header('location:compromissos.php');