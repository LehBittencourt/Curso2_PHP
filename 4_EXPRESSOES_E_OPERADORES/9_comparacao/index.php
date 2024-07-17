<?php

        // Comparação de igualdade

    if(3 == 3) {
        echo "Comparação vercadeira <br>";
    }

    if(3 == 5) {
        echo "Comparação vercadeira <br>";
    }

    if(3 == "3") {
        echo "Comparação vercadeira <br>";
    }

    $nome = "lele";
    $nomeDoSistema = "lele";

    if($nome == $nomeDoSistema) {
        echo "O nome coincide <br>";
    }

        // Operador idêntico a

    if(5 === 5) {
        echo "Comparação verdadeira <br>";
    }
        
    if(5 === "5") {
        echo "Comparação verdadeira <br>";
    }
    
    if(5 === "teste") {
        echo "Comparação verdadeira <br>";
    }

        // Operador de diferença

    $a = 3;
    $b = 4;

    if($a != $b) {
        echo "Testando diferença 1 <br>";
    }

    if($a != 3) {
        echo "Testando diferença 2 <br>";
    }

    if(false != "Teste") {
        echo "Testando diferença 3 <br>";
    }

    if(3 != "3") {
        echo "Testando diferença 4 <br>";
    }

    if(3 != "4") {
        echo "Testando diferença 5 <br>";
    }

        // Operador ão idêntico a

    $a = 1;
    $b = "1";

    if($a !== $b) {
        echo "A é diferente de B 1 <br>";
    }

    if(1 !== 2) {
        echo "A é diferente de B 2 <br>";
    }

        // Maior e maior ou igual

    $a = 4;
    $b = 5;

    if($a > $b) {
        echo "A é maior que B <br>";
    }

    if($a >= $b) {
        echo "A é maior que B <br>";
    }

        // Menor e menor ou igual

        if($a < $b) {
            echo "A é menor que B <br>";
        }
    
        if($a <= $b) {
            echo "A é menor que B <br>";
        }

?>