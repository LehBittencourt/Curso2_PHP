<?php

// Imprimindo números booleanos

echo true;
echo "<br>";
echo false;
echo "<br>";

if(true){
    echo "É verdadeiro!<br>";
}

echo "<br>";

if(false){
    echo "É falso!<br>";
}

$status = true;

if($status){
    echo "Pode entrar!<br>";
}

// Verificando se o dado é um booleano 

$a = true;

 echo "<br>";

if(is_bool($a)){
    echo "É um booleano!<br>";
}

if(is_bool(0)){
    echo "É um booleano!<br>";
}

if(is_bool(false)){
    echo "É um booleano!<br>";
}

echo "<br>";

if(0 == false){
    echo "0 é considerado falso!<br>";
}

if(0.0 == false){
    echo "0 é considerado falso!<br>";
}