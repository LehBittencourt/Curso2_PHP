    - Escreva uma função chamada compararNumeros que recebe dois números inteiros como parâmetros.<br>
    - A função deve comparar os dois números e retornar uma string indicando qual número é maior ou se são iguais.<br>
    
    - Considere as seguintes condições:<br>
        - Se o primeiro número for maior que o segundo número, retorne a string "O primeiro número é maior."<br>
        - Se o segundo número for maior que o primeiro número, retorne a string "O segundo número é maior."<br>
        - Se os números forem iguais, retorne a string "Os números são iguais."<br>

<?php

    function compararNumeros($a, $b) {

        if($a > $b){
            return "O primeiro número é maior. <br>";
        } else if ($a < $b) {
            return "O segundo número é maior. <br>";
        } else {
            return "Os números são iguais. <br>";
        }
    }

    echo compararNumeros(6, 3);
    echo compararNumeros(5, 5);
    echo compararNumeros(2, 4);
    
?>