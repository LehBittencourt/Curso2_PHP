    - Crie um Loop que vai até o número 30;<br>
    - O contador deve inciar como 4;<br>
    - Faça incrementos de 2 em 2 no contador;<br>
    - Utilize o break para parar o loop quando chegar no número 24.<br>

<?php

    $x = 4;

    while($x < 30) {

        echo $x . "<br>";

        if($x === 24) {
            echo "Encerrando o loop! <br>";
            break;
        }

        $x += 2;

    }


?>