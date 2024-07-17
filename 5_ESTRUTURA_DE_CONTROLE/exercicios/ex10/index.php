    - Escreva uma função chamada calcularDesconto que recebe dois parâmetros: o valor de um produto e uma categoria.<br>
    - A função deve retornar o valor do produto com o desconto aplicado, de acordo com a categoria.<br>

    - Considere as seguintes categorias e seus respectivos descontos:<br>
        - "eletrônicos": 10% de desconto.<br>
        - "vestuário": 20% de desconto.<br>
        - "alimentos": 5% de desconto.<br>
        - Outras categorias: nenhum desconto.<br>
        - Se a categoria for desconhecida ou não estiver listada acima, o desconto será zero.<br>
        - O valor do produto e a categoria serão sempre fornecidos como argumentos da função.<br>

<?php

    function calcularDesconto($valor, $categoria) {
        switch($categoria) {

            case "eletrônicos":
                return "Valor com desconto de 10%: " . $valor * 0.9 . "<br>";
                break;
            
            case "vestuário":
                return "Valor com desconto de 20%: " . $valor * 0.8 . "<br>";
                break;
            
            case "alimentos":
                return "Valor com desconto de 5%: " . $valor * 0.95 . "<br>";
                break;
            default:
                return "Nenhum desconto para essa categoria. Valor: " . $valor . "<br>";
                break;
        }
        
    }

    echo calcularDesconto(100, "eletrônicos");
    echo calcularDesconto(100, "vestuário");
    echo calcularDesconto(100, "alimentos");
    echo calcularDesconto(100, "outros");

?>