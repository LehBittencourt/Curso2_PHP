    - Crie uma função que receba um array de intes de supermercado;<br>
    - Retorne este array em forma de string, separado em vírgulas;<br>

<?php 

    $arr = ["Arroz", "Banana", "Escova de dente", "Carne"];
    $lista = [];


    function listaParaString($arr) {
        
        $str = "Você levou estes itens do mercado: ";

        for($i = 0; $i < count($arr); $i++){

            if($i + 1 == count($arr)){
                $str .= "$arr[$i]. ";
            } else {
                $str .= "$arr[$i], ";
            }

        }
        
        return $str;

    }

    echo listaParaString($arr);

?>