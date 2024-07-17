    - Crie variáveis com números e outras com string;<br>
    - Faça um if checando se é um número;<br>
    - Caso for, atribua a multiplicação deste número por 2 em outra variável;<br>
    - E crie um outro if, que checa se o novo número é maior que 100;<br>
    - Se sim, imprima uma mensagem.<br>

<?php

    $a = 10;
    $b = 60.5;
    $c = "teste";

    if(is_int($a) || is_float($a)) {
        
        $mult1 = $a * 2;

        if($mult1 > 100){
            echo "O número é maior que 100! <br>";
        } else {
            echo "O número não é maior que 100! <br>";
        }
    } else {
        echo "Não é um número! <br>";
    }

    if(is_int($b) || is_float($b)) {
        
        $mult2 = $b * 2;

        if($mult2 > 100){
            echo "O número é maior que 100! <br>";
        } else {
            echo "O número não é maior que 100! <br>";
        }
    } else {
        echo "Não é um número! <br>";
    }

    if(is_int($c) || is_float($c)) {
        
        $mult3 = $c * 2;

        if($mult3 > 100){
            echo "O número é maior que 100! <br>";
        } else {
            echo "O número não é maior que 100! <br>";
        }
    } else {
        echo "Não é um número! <br>";
    }

?>