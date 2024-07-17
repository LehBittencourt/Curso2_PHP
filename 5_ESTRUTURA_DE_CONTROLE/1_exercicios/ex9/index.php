    - Escreva uma função chamada verificarAcesso que recebe dois parâmetros: um número inteiro representando a idade de uma pessoa e um booleano indicando se a pessoa possui autorização de acesso.<br>
    - A função deve retornar uma string indicando se a pessoa pode ou não ter acesso a um determinado local.<br>

    - Considere as seguintes condições:<br>
        - Se a idade for maior ou igual a 18 anos e a autorização for verdadeira, retorne a string "Acesso autorizado".<br>
        - Se a idade for menor que 18 anos, retorne a string "Acesso negado. Idade mínima requerida: 18 anos".<br>
        - Se a idade for maior ou igual a 18 anos, mas a autorização for falsa, retorne a string "Acesso negado. Autorização necessária".<br>

<?php

    function verificarAcesso($idade, $autorizacao) {
        if($idade >= 18 && $autorizacao == true) {
            return "Acesso autorizado! <br>";
        } else if($idade < 18) {
            return "Acesso negado. Idade mínima requerida: 18 anos! <br>";
        } else if($idade >= 18 && $autorizacao == false) {
            return "Acesso negado. Autorização necessária! <br>";
        }
    }

    echo verificarAcesso(21, true);
    echo verificarAcesso(17, true);
    echo verificarAcesso(59, false);

?>