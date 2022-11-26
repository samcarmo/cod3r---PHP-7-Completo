<div class="titulo">Desafio For</div>

<!-- 
    Usar o for...
    #
    ##
    ###
    ####
    #####
    1) Pode usar incremento $i++
    2) Não pode usar incremento $i++
 -->

<?php
echo'Utilizando incremento<br>';
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo '#';
    }
    echo '<br>';
}

echo '<hr>';


// Resposta
$impressao = '';
for($cont = 1; $cont <= 5; $cont++){
    $impressao .= '#';
    echo "$impressao<br>";
}

echo '<hr>';
for(
    $impressao2 = '#';
    $impressao2 !== '######';
    $impressao2.= '#'){
    echo "$impressao2<br>";
}