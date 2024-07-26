<?php 

    $str = "Esta é minha string";
    $minha = substr($str, 10, 5);

    echo $str . "<br>";
    echo $minha . "<br>";

    $str2 = "Testando esta string abc";
    $novaString = substr($str2, 8); // Omitir Comprimento = pega até o fim

    echo $novaString . "<br>";

    $novaString2 = substr($str2, 8, -3); // Comprimento Negativo = remover do último índice

    echo $novaString2. "<br>";

?>