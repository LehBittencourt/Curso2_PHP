    - Crie um array com valores inteiros de 10 a 100, com incremento de 1;<br>
    - Aplique um loop neste array;<br>
    - Quando entrar os valores 30 ou 40, pule para a próxima execução.<br>

<?php

    $arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    $tamanho = count($arr);
    $i = 0;

    while($i < $tamanho) {

        if($arr[$i] == 30 || $arr[$i] == 40) {
            echo "Pulando a execução. <br>";
            $i++;
            continue;
        }

        echo "Valor " . $i + 1 . ": " . $arr[$i] . "<br>";

        $i++;
    }


?>