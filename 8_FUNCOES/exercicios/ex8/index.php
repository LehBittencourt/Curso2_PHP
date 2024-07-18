    - Crie uma função chamada sumEvenNumbers que recebe um número inteiro positivo como parâmetro.<br>
    - A função deve retornar a soma de todos os números pares de 1 até o número fornecido, inclusive.<br>
    - Utilize uma estrutura de repetição para percorrer os números e uma variável para acumular a soma.<br>

<?php


    function sumEvenNumbers($num) {
        
        $sum = 0;

        for ($i = 1; $i <= $num; $i++) {
        
            if ($i % 2 == 0) {
                $sum += $i;
        
            }
        }
        
        return $sum;
    }

    echo sumEvenNumbers(4);

?>
