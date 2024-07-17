    - Crie algumas variáveis com tipos de dados diferentes;<br>
    - Cheque se a variável é um inteiro;<br>
    - Caso sim, apresente uma mensagem confirmando o tipo de dado;<br>
    - Caso não, apresente outra mensagem.<br>

<?php

    $a = 11;
    $b = 3.14;
    $c = "lele";

    if(is_int($a)) {
        echo "1 - O tipo de dado é inteiro! <br>";
    } else {
        echo "1 - O tipo de dado não é inteiro! <br>";
    }

    if(is_int($b)) {
        echo "2 - O tipo de dado é inteiro! <br>";
    } else {
        echo "2 - O tipo de dado não é inteiro! <br>";
    }

    if(is_int($c)) {
        echo "3 - O tipo de dado é inteiro! <br>";
    } else {
        echo "3 - O tipo de dado não é inteiro! <br>";
    }

?>