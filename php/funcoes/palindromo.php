<div class="titulo">Desafio Palindromo</div>
<!-- Utilizando laço for -->
<?php

// function palindromo($frase)
// {
//     $frase = str_replace(' ', '', strtolower(strrev($frase)));
//     $inverso = str_replace(' ', '', strtolower(strrev($frase)));
//     if ($frase === $inverso) {
//         $palindromo = "É um palindromo";
//     } else {
//         $palindromo = "Não é um palindromo";
//     }
//     echo $palindromo;
// }

// $frase = 'Subi no Onibus';

// $inverso = '';
// $frase = str_replace(' ', '', strtolower(strrev($frase)));
// $strqt = strlen($frase);
// for ($i = $strqt-1; $i >= 0; $i--) {
//     // echo '<br>' . $i;
//     // echo ' ' . $frase[$i];
//     $inverso = $inverso . $frase[$i];
// }
// // echo '<br>' . $inverso;
// if ($frase === $inverso) {
//     $palindromo2 = "É um palindromo";
// } else {
//     $palindromo2 = "Não é um palindromo";
// }

// echo 'Function: ';
// palindromo($frase);
// echo '<br>For: '.$palindromo2;


// Resposta
function palindromo($palavra)
{
    $ultimoIndice = strlen($palavra) - 1;
    for ($i = 0; $i <= $ultimoIndice; $i++) {
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]){
            return 'Não';
        }
    }
    return 'Sim';
}

echo palindromo('arara') . ' ';
echo palindromo('ana') . ' ';
echo palindromo('abccba') . ' ';
echo palindromo('bola') . ' ';
echo '<br>';

function palindromoSimples($palavra){
    return $palavra === strrev($palavra) ? 'Sim': 'Não';
}

echo palindromoSimples('arara') . ' ';
echo palindromoSimples('ana') . ' ';
echo palindromoSimples('abccba') . ' ';
echo palindromoSimples('bola') . ' ';