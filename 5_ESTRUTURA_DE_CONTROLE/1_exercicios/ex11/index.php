    - Escreva uma função chamada verificarCategoria que recebe um parâmetro de entrada representando uma categoria.<br>
    
    - A função deve retornar uma mensagem de acordo com a categoria fornecida:<br>
        - Se a categoria for "eletrônicos", retornar "Essa categoria é de produtos eletrônicos".<br>
        - Se a categoria for "vestuário", retornar "Essa categoria é de produtos de vestuário".<br>
        - Se a categoria for "alimentos", retornar "Essa categoria é de produtos alimentícios".<br>
        - Para qualquer outra categoria, retornar "Categoria desconhecida".<br>
        - O parâmetro de categoria será sempre fornecido como uma string.<br>

<?php

    function verificarCategoria($categoria){

        switch($categoria) {

            case "eletrônicos":
                return "Essa categoria é de produtos eletrônicos. <br>";
                break;
            
            case "vestuário":
                return "Essa categoria é de produtos de vestuário. <br>";
                break;
            
            case "alimentos":
                return "Essa categoria é de produtos alimentícios. <br>";
                break;
            default:
                return "Categoria desconhecida. <br>";
                break;
        }
    
    }

    echo verificarCategoria("eletrônicos");
    echo verificarCategoria("vestuário");
    echo verificarCategoria("alimentos");
    echo verificarCategoria("outros");

?>