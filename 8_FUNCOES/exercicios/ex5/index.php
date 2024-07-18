    - Crie uma função que verifica se um número é par ou ímpar;<br>
    - Se for par imprima uma mensagem;<br>
    - Se for ímpar imprima uma mensagem.<br>

<?php

    function parOuImpar($n1) {
        if($n1 % 2 === 0) {
            echo "$n1 é par. <br>";
        } else {
            echo "$n1 é ímpar. <br>";
        }
    }

    parOuImpar(4);
    parOuImpar(3);
    parOuImpar(78);
    parOuImpar(89);

?>