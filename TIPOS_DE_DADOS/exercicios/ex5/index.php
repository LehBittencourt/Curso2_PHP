<?php

// Crie um array associativo com caracteristicas de uma pessoa e depois faça um if checando se ela é maior de idade e imprima uma mensagem, caso seja;

$pessoa = [
    'nome' => 'lele',
    'idade' => 21,
    'localNascimento' => 'Distrito Federal',
    'corOlhos' => 'castanhos'
];

if($pessoa['idade'] >= 18){
    echo "$pessoa[nome] é maior de idade!";
}