<?php

    // Definição do contador
    $x = 0;

    // Início / Definição da Estrutura
    while($x < 10){

        // Corpo do Loop
        echo $x . "<br>";

        // Incremento do contador
        $x++;

    }

    echo "<br>";

    $y = 0;

    while($y <= 10){

        echo $y . "<br>";

        $y +=  2;

    }

    echo "<br>";

    $z = 10;

    while($z > 0){

        echo $z . "<br>";

        $z--;

    }

    echo "<br>";

    $a = 10;

    while($a > 0) {

        if($a % 2 != 0) {
            echo $a . "<br>";
        }

        $a--;

    }

?>