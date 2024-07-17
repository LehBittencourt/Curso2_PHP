    - Crie um array de 1 a 10;<br>
    - Utilize um loop for para criar este array;<br>
    - Dica: você pode utilizar o método array_push(arr, elemento) para inserir um elemento em um array;<br>
    - Imprima o array criado com print_r.<br>

<?php

    $arr = [];

    for($i = 0; $i < 10; $i++) {
        
        array_push($arr, $i);
    
    } 

    print_r($arr);

?>