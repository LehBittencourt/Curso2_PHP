<?php

    echo 5 / 2;
    echo "<br>";

    if(is_float(5/2)) {
        echo "É flaot <br>";
    }

    echo 2 . 3;
    echo "<br>";

    if(is_string(2 . 3)) {
        echo "É string <br>";
    }

    $nome = "Letícia";
    $sobrenome = "vieira";

    $nomeCompleto = $nome . " " . $sobrenome; 

    echo $nomeCompleto;
    echo "<br>";

?>