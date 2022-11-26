<div class="titulo">Desafio Impressao</div>

<!-- Enunciado:
- Imprima apenas os valores do array que contém indice par
- Resolver com for e foreach
- Valores esperados: AAA, CCC, EEE
-->

<?php
$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

for($i =0; $i < count($array); $i++) {
    if($i % 2 === 1) continue;
    echo "{$array[$i]} ";
}
echo "<br>";

foreach($array as $chave => $valor) {
    if($chave % 2 !== 0) continue;
    echo "$valor ";
}