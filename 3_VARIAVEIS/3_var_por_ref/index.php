<?php

    // Podemos criar variáveis por referência;

    $x = 10;
    $y =& $x;

    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $y = 15;

    echo "<br>";
    echo "Atribuição após ref";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $x = 20;

    echo "<br>";
    echo "Atribuição após segunda ref";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

?>