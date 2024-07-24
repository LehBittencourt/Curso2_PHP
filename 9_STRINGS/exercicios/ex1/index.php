    - Crie uma função que recebe características de algum objeto como argumento, em um array associativo;<br>
    - O array deve conter nome => preco;<br>
    - Retorne apenas os itens que custam mais que R$10;<br>
    - Imprima o retorno;<br>

<?php 

    $arr = [
        'porta' => 100,
        'motor' => 2000,
        'maçaneta' => 5,
        'retrovisor' => 8
    ];

    function itensCarros($arr) {

        $arrItensCaros = [];

        foreach($arr as $item => $preco) {

            if($preco > 10) {
                array_push($arrItensCaros, $item);
            }
        }

        return $arrItensCaros;
    }

    $novoArr = itensCarros($arr);

    print_r($novoArr);

?>