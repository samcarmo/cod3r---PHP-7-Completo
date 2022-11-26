<div class="titulo"> Desafio Operadores Lógicos</div>

<!-- 
    Dois trabalhos -> terça e quinta!
    - Se os dois forem executados -> TV 50' e Sorvete
    - Se apenas um for executado - > TV 32' e Sorvete
    - Se nenhum for executado -> Fica em casa mais saudável!
 -->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button,
    select {
        font-size: 1.8rem;
    }
</style>

<?php
//echo $_POST['t1'];
//echo $_POST['t2'];

$t1 = ($_POST['t1'] == true);
$t2 = ($_POST['t2'] == true);

if ($t1 && $t2) {
    echo 'Parabéns, a TV de 50" está a caminho, e para comemorar, o sorvete no shopping está garantido!';
} elseif ($t1 || $t2) {
    echo 'Parabéns, a TV de 32" está a caminho, e para comemorar, o sorvete no shopping está garantido!';
} else {
    echo 'Infelizmente o sorvete no shopping e a TV ainda estão distantes!';
}

// Resolução
if (isset($_POST['t1']) && isset($_POST['t2'])) {
    $t1r = $_POST['t1'] === '1';
    $t2r = !!$_POST['t2'];
    $tv = '';
    $sorvete = false;

    if ($t1r and $t2r) {
        $tv = '50"';
    } elseif ($t1r xor $t2r) {
        $tv = '32"';
    }

    if ($t1r or $t2r) {
        $sorvete = true;
    }

    if ($tv) {
        $resultado = "Vamos comprar uma TV de $tv";
    } else {
        $resultado = "Sem TV dessa vez :(";
    }

    $saudavel = !$sorvete;

    if (!$sorvete) {
        $resultado .= '<br>Estamos mais saúdaveis!';
    } else {
        $resultado .= '<br>Sorvete liberado \o/';
    }

    echo "<p>$resultado</p>";
}
