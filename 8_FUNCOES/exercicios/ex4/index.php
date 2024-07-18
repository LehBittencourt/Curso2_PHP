    - Crie uma função;<br>
    - Ela deve receber um parâmetro de nome e idade;<br>
    - Imprima "Olá eu sou o NOME e tenho X anos".<br>

<?php

    function apresentarPessoa($nome, $idade, $genero) {
        echo "Olá eu sou $genero $nome e tenho $idade anos! <br>";
    }

    apresentarPessoa("Letícia", 21, "a");
    apresentarPessoa("Pedro", 39, "o");
    apresentarPessoa("Paula", 49, "a");
    
?>