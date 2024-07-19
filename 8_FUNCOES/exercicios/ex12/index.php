    - Crie uma função chamada isPrime que recebe um número inteiro positivo como parâmetro.<br>
    - A função deve verificar se o número fornecido é um número primo.<br>
    - Um número primo é aquele que é divisível apenas por 1 e por ele mesmo.<br>
    - Caso o número fornecido seja menor que 2, retorne false.
    - Caso contrário, percorra os números de 2 até a raiz quadrada do número fornecido e verifique se algum deles é um divisor do número. Se encontrar um divisor, retorne false. Caso contrário, retorne true.

    <?php

function isPrime($num) {
    if ($num < 2) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    
    return true;
}

?>

