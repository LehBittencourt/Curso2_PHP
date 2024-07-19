    - Crie uma função chamada sumDigits que recebe um número inteiro como parâmetro.<br>
    - A função deve calcular a soma dos dígitos desse número.<br>
    - Retorne o valor da soma.<br>

<?php

    function sumDigits($num) {
        $sum = 0;
        $num = abs($num); 
    
        while ($num > 0) {
            $sum += $num % 10; 
            $num = intval($num / 10); 
        }
    
    return $sum;
}

?>
