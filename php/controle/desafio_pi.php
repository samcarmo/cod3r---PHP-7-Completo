<div class="titulo">Desafio PI</div>

<?php
echo pi();
$pi = 3.14;
$piPhp = pi();

//var_dump($pi);
//var_dump(pi());
$piRound = round($piPhp, 2);
echo "Pi Round: $piRound";

if($pi === $piRound){
    echo "<br>Iguais!";
} else {
    echo "<br>Diferentes!";
}

// Operador Relacional
$piErrado = 2.8;

if($piErrado === $piRound){
    echo "<br>Iguais!";
} else {
    echo "<br>Diferentes!";
}

//Resposta
echo '<br>' . ($pi - pi());
echo '<br>' . ($pi - $piErrado);

if($pi - pi() <= 0.01){
    echo '<br>Praticamente iguais!';
} else {
    echo '<br>Diferentes!';
}

if($pi - $piErrado <= 0.01){
    echo '<br>Praticamente iguais!';
} else {
    echo '<br>Valor errado!!';
}