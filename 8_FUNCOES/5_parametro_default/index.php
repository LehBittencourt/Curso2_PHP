<?php

    function teste($a = "teste") {
        echo "O valor de A é: $a <br>";
    }

    teste();
    teste("asd");

    function teste2($b, $a = "x") {
        echo "O valor de a é: $a e de b é: $b <br>";
    }

    teste("1");
    teste2("1", "2");

?>