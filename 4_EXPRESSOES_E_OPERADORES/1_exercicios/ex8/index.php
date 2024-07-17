    - Verifique as seguintes operações com AND;<br>
    - 15 > 5 AND "João" === "João";<br>
    - "teste" > 5 AND 1;<br>
    - 2 == 3 AND 5 >= 3.<br>

<?php

    if(15 > 5 AND "João" === "João") {
        echo "Comparação 1 é verdadeira! <br>";
    }
    
    if("teste" > 5 AND 1) {
        echo "Comparação 2 é verdadeira! <br>";
    }

    if(2 == 3 AND 5 >= 3) {
        echo "Comparação 3 é verdadeira! <br>";
    }

?>