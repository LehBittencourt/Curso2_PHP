    - Crie uma variável que recebe uma velocidade de um carro;<br>
    - Depois crie uma estrutura if que verifica essa velocidade;<br>
    - Se a velocidade for menor que 40, imprima que o motorista está na velocidade correta;<br>
    - Se igual a 40, imprima uma mensagem para o motorista tomar cuidado;<br>
    - Se for maior de 40, imprima uma mensagem de multa.<br>

<?php

    $v1 = 35;
    $v2 = 40;
    $v3 = 80;

    if($v1 < 40) {
        echo "Você está na velocidade correta! <br>";
    } else if($v1 === 40) {
        echo "Cuidado! Você está no limite da velocidade. <br>";
    } else if($v1 > 40) {
        echo "Você recebeu uma multa por excesso de velocidade! <br>";
    }

    if($v2 < 40) {
        echo "Você está na velocidade correta! <br>";
    } else if($v2 === 40) {
        echo "Cuidado! Você está no limite da velocidade. <br>";
    } else if($v2 > 40) {
        echo "Você recebeu uma multa por excesso de velocidade! <br>";
    }

    if($v3 < 40) {
        echo "Você está na velocidade correta! <br>";
    } else if($v3 === 40) {
        echo "Cuidado! Você está no limite da velocidade. <br>";
    } else if($v3 > 40) {
        echo "Você recebeu uma multa por excesso de velocidade! <br>";
    }

?>
