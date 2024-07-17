    - Crie um array de 10 a 20 com for;<br>
    - Faça um loop em cima do array criado dinamicamente;<br>
    - Imprima apenas os números ímpares.<br>

<?php

    $arr = [];

    for($i = 10; $i <= 20;$i++) {
        array_push($arr,$i);
    }

    print_r($arr);
    echo "<br>";

    for($i = 0; $i < count($arr);$i++) {

        if($i % 2 == 1) {
            echo "Elemento $i: $arr[$i] <br>";
        }
    }

?>