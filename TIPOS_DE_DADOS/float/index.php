<?php

// imprimindo números float
$a = 1.12;

echo $a;
echo "<br>";
echo 1.023;
echo "<br>";
echo 12.5 + 1.3214;
echo "<br>";
echo 1 + 1.3214;
echo "<br>";
echo "<br>";

// Verificando se o dado é float

$b = "teste";
$c = 12.8;

if(is_float($b)){
    echo "É float 1! <br>";
}

if(is_float($c)){
    echo "É float 2! <br>";
}
