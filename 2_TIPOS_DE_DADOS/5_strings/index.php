<?php

// Imprimindo strings

echo "Testando texto de aspas duplas <br>";
echo 'Testando texto de aspas simples <br>';

echo "<br>";

echo "Ele dissse: 'Olá!' <br>'";
echo 'Ela disse: "Olá!" <br>';

echo '<br>';

$idade = 15;

echo "Ele tem $idade anos <br>";
echo 'Ele tem $idade anos <br>';

// Verificando se o dado é string

$str = "Leticia";
$num = 2;

echo "<br>";

if(is_string($str)){
    echo "$str é uma string!<br>";
}

if(is_string($num)){
    echo "$str é uma string!<br>";
}