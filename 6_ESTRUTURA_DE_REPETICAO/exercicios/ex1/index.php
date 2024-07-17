    - Crie um array com alguns valores (pelo menos 10) de tipos de dados diferentes;<br>
    - Faça um loop while para exibir apenas os dados que são strings.<br>

<?php

    $vet = [1, 2, "lele", true, 1.2, 4, "batata", 3,14, "world", "10"];
    $tamanho = count($vet);
    $i = 0;

    while($i < $tamanho) {

        if(is_string($vet[$i])) {
            echo $vet[$i] . "<br>";
        }

        $i++;
    }

?>