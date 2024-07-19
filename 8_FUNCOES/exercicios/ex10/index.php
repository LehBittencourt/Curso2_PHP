    - Crie uma função chamada countVowels que recebe uma string como parâmetro.<br>
    - A função deve retornar a quantidade de vogais presentes na string.<br>
    - Utilize uma estrutura de repetição para percorrer cada caractere da string.<br>
    - Utilize uma variável para armazenar o contador de vogais.<br>
    - Considere que as vogais são as letras "a", "e", "i", "o" e "u", em minúsculas ou maiúsculas.<br>

<?php 

    function countVowels($str) {
        
        $vowels = ["a", "e", "i", "o", "u", "A", "E", "I", "O", "U",];
        $count = 0;

        for ($i = 0; $i < strlen($str); $i++) {
            if(in_array($str[$i], $vowels)) {
                $count++;
            }
        }

        return $count;
    }

    echo "Quantidade de vogais presentes na string: " . countVowels("batata") . "<br>";
    
?>
