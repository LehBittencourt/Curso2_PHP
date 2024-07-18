    - Crie uma função;<br>
    - Define três variáveis númericas dentro dela;<br>
    - Exiba a multiplicação destes números com um echo.<br>

<?php

    function multiplicacao(){
        $a = 1;
        $b = 2;
        $c = 3;
    
        $mult = $a * $b * $c;
    
        return "$a x $b x $c = $mult <br>";
    }
    
    echo multiplicacao();

?>