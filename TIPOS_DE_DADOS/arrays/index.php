<?php

// Imprimindo arrays

$a = [1, 2, 3];

print_r($a);

echo "<br><br>";

echo $a[0];

echo "<br><br>";

$arr = ["lele", 1, true, 1.2];

print_r($arr);

echo "<br><br>";

echo $arr[2];

// echo $a; - ERRO, pois tenta converter o array para string!

// Array Associativo

echo "<br><br>";

$arr = ['nome' => 'bela', 'patas' => 4];

echo $arr['nome'];

echo "<br><br>";

echo $arr['patas'];

echo "<br><br>";

print_r($arr);


