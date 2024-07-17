<?php

    if(10 > 2) {

        echo "Entrou no primeiro if <br>";
        
        if("teste" == "teste") {
            echo "Entrou no segundo if <br>";
        }
    }

    if(10 > 2) {
        
        echo "Entrou no primeiro if <br>";
        
        if("teste" != "teste") {
            echo "Entrou no segundo if <br>";
        } else {
            echo "Entrou no segundo else <br>";
        }
    } else {
        echo "Entrou no primeiro else <br>";
    }

    if(10 < 2) {
        
        echo "Entrou no primeiro if <br>";
        
        if("teste" != "teste") {
            echo "Entrou no segundo if <br>";
        } else {
            echo "Entrou no segundo else <br>";
        }
    } else {
        echo "Entrou no primeiro else <br>";
    }

    $escopo = 10;

    if(10 > 2) {
        
        echo "Entrou no primeiro if <br>";
        $escopo2 = 20;

        if("teste" == "teste") {
            echo "Entrou no segundo if <br>";
            echo $escopo;
            echo " " . $escopo2;
        } else {
            echo "Entrou no segundo else <br>";
        }
    } else {
        echo "Entrou no primeiro else <br>";
    }

?>