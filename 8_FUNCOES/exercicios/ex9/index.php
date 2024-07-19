    - Crie uma função chamada defineCorCarro;<br>
    - Onde há parâmetro chamado cor, com valor default de vermelha;<br>
    - Retorne a cor do carro;<br>
    - Imprima o retorno tanto com parâmetro default, como também definindo a cor;<br>

<?php

    function defineCorCarro($cor = "vermelha") {
        return "Cor do carro é: $cor.";
    }

    $carroVermelho = defineCorCarro();
    echo $carroVermelho . "<br>";

    $carroAzul = defineCorCarro("azul");
    echo $carroAzul. "<br>";

?>
