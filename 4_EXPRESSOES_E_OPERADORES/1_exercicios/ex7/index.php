    - Insira o valor 5 em uma variável, e o valor 3 em outra;<br>
    - Teste os operadores de: igualdade, diferença, idêntico e não idêntico. <br>

<?php

    $n1 = 5;
    $n2 = 3;

    if($n1 == $n2) { // igualdade
        echo "Os dois números são iguais! <br>";
    }

    if($n1 != $n2) { // diferença
        echo "Os dois números são diferentes! <br>";
    }

    if($n1 === $n2) {
        echo "Os dois números são idênticos! <br>";
    }

    if($n1 !== $n2) {
        echo "Os dois números não são idênticos! <br>";
    }
    
?>