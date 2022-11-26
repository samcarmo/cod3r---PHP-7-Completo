<div class="titulo">Variaveis</div>

<?php
$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);


echo '<br>';
$a =3;
$b = 16;
$soma = $a + $b;
echo $soma;

echo '<br>';
echo isset($soma);

unset($soma);
var_dump($soma);

$variavel = 10;
echo '<br>' . $variavel;
var_dump($variavel);

$variavel = "Agora sou uma string";
echo '<br>' . $variavel;
var_dump($variavel);

// Nomes de variável
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
//$6var = 'invalida';
