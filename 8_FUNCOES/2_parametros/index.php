<?php

    function velocidadeMax($vel){
        echo "O carro atinge a velocidade de $vel km/h <br>";
    }

    velocidadeMax(200);
    velocidadeMax(50);

    $velocidade = 125;
    
    velocidadeMax($velocidade);

    // PHP ignora parâmetros desnecessários
    velocidadeMax(250, "teste");

    function descreverAnimal($nome, $raca, $cor) {
        echo "O $nome é da $raca <br>";
    }

    descreverAnimal("Bela", "vira lata", "preto e branco");
    descreverAnimal("Shark", "Pator Alemão", "marrom");
?>