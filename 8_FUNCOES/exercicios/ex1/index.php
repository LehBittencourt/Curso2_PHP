    - Crie um array com strings;<br>
    - Utilize a função implode no array;<br>
    - Primeiro argumento: ","<br>
    - Segundo argumento: o seu array<br>
    - Atribua a invocação da função a uma variável<br>
    - Exiba o resultado<br>

<?php

    $arr = ["lele", "batata", "10", "teste", "balão"];

    $teste = implode(", ", $arr);

    echo $teste;

?>