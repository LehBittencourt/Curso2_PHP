<?php

$c = -78.9;


echo $c;
echo "<br>";
echo "<br>";

if(is_float($c)){
    echo "Sim, podemos ter float negativos"; 
}


if(is_int($c)){
    echo "É um inteiro";
}