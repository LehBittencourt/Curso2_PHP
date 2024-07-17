    - Crie uma variável que receba um peso;<br>
    - Caso seja maior que 80, imprima a mensagem que está pesado demais;<br>
    - Se  não, imprima "Peso dentro do limite";<br>

<?php

    $peso1 = 57.1;
    $peso2 = 80.0;
    $peso3 = 122.5;

    if($peso1 > 80) {
        echo "1 - O pacote está pesado demais! <br>";
    } else {
        echo "1 - Peso detro do limite! <br>";
    }

    
    if($peso2 > 80) {
        echo "2 - O pacote está pesado demais! <br>";
    } else {
        echo "2 - Peso detro do limite! <br>";
    }

    
    if($peso3 > 80) {
        echo "3 - O pacote está pesado demais! <br>";
    } else {
        echo "3 - Peso detro do limite! <br>";
    }
?>