<?php

ini_set('display_errors',1);

include 'Produto.php';

$p1 = new Produto();
$p1 -> setNome ('Tenis para corrida');
$p1 -> setValor(299.01);

$p2 = new Produto();
$p2-> setNome('Calça Jeans');
$p2-> setValor(100.01);

echo var_dump($p1) . PHP_EOL;
echo var_dump($p2) . PHP_EOL;
// $p2=new Produto();
// echo $p2->teste();

// $p1 = new Produto();
// $p1 -> nome ='Tenis para corrida';
// $p1 -> valor=299.00;

// $p2 = new Produto();
// $p2-> nome ='Calça Jeans';
// $p2-> valor = -100.00;

// echo var_dump($p1) . PHP_EOL;
// echo var_dump($p2) .PHP_EOL;
