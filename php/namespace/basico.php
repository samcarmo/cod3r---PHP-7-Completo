<?php

namespace contexto;

use const outro_contexto\CONSTANTE4;

?>

<div class="titulo">Exemplo Básico</div>

<?php
echo __NAMESPACE__ . '<br>';
const CONSTANTE1 = 123;
define('CONSTANTE2', 234); //Constante na raiz
define('contexto\CONSTANTE2', 1234); //Constante no namespace atual
define(__NAMESPACE__ . '\CONSTANTE3', 345);
define('outro_contexto\CONSTANTE4', 456);

echo CONSTANTE1 . '<br>';
echo CONSTANTE2 . '<br>';
echo \CONSTANTE2 . '<br>';
// echo contexto\CONSTANTE3 . '<br>';
echo \contexto\CONSTANTE3 . '<br>'; //Acessando caminho absoluto
echo constant(__NAMESPACE__ . '\CONSTANTE3') . '<br>';
// echo CONSTANTE4 . '<br>';
echo \outro_contexto\CONSTANTE4 . '<br>';

function soma($a, $b)
{
    return $a + $b;
}

echo \contexto\soma(1, 2) . '<br>';
// echo \soma(1, 2) . '<br>';
echo soma(1, 2) . '<br>';

function strpos($str, $text)
{
    echo "Buscando o texto '{$text}' em '{$str}' <br>";
    return 1;
}

echo strpos('Texto genérico para busca', 'busca') . '<br>';
echo \strpos('Texto genérico para busca', 'busca') . '<br>';