    - Percorra a string: O rato roeu a roupa do rei de Roma, a partir de um loop;<br>
    - Imprima o número de letras "a" desta string;<br>

<?php 

    $str = "O rato roeu a roupa do rei de Roma";
    $cont = 0;

    for($i = 0; $i < strlen($str); $i++) {
        if($str[$i] == "a" || $str[$i] == "A"){
            $cont++;
        }
    }

    echo "Número de letras 'a' na frase: $cont <br>";

?>
