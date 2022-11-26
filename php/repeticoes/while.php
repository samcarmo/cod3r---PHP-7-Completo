<div class="titulo">While/Do While</div>

<?php
const VALOR_LIMITE = 5;
$contador = 0;

while ($contador < VALOR_LIMITE) {
    echo "while $contador <br>";
    $contador++;
}

$contador = 100;
do { //Essa executa pelo menos uma vez antes de verificar a condição
    echo "do-while $contador <br>";
    $contador++;
} while ($contador < VALOR_LIMITE);

$contador = 0;
while (true) {
    echo "while(true) $contador <br>";
    $contador++;
    if ($contador >= VALOR_LIMITE) break;
}

// for($contador = 0;$contador < VALOR_LIMITE;$contador++){
//     echo "for $contador <br>";
// }