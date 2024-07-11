<?php

class Pessoa {
    public $nome;

    function falar() {
        echo "Olá pessoal!";
    }
}

$lele = new Pessoa();

$lele->nome = "lele";
echo $lele->nome;

echo "<br><br>";

$lele->falar();



