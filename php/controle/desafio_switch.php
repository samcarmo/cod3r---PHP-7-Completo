<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="f-c">Fahrenheit > Celsius</option>
        <option value="c-f">Celsius > Fahrenheit</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form>* {
        font-size: 1.8rem;
    }
</style>

<?php
const MILHA = 1.609;
const KM = 1000;

if (isset($_POST['param']) && isset($_POST['conversao'])) {



    $valor = $_POST['param'];
    $operacao = $_POST['conversao'];

    $categoria = 'suv';
    switch ($operacao) {
        case 'km-milha':
            $resultado = $valor / MILHA;
            $op = "Quilômetro para Milha";
            break;
        case 'milha-km':
            $resultado = $valor * MILHA;
            $op = "Milha para Quilômetro";
            break;
        case 'metro-km':
            $resultado = $valor / KM;
            $op = "Metro para Quilômetro";
            break;
        case 'km-metro':
            $resultado = $valor * KM;
            $op = "Quilômetro para Metro";
            break;
        case 'f-c':
            $resultado = ($valor - 32) * (5 / 9);
            $op = "Fahrenheit para Celsius";
            break;
        case 'c-f':
            $resultado = $valor * (9 / 5) + 32;
            $op = "Celsius para Fahrenheit";
            break;
    }

    echo "O resultado da conversão de $valor $op é $resultado";
}

echo '<br>';

//Resolução
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CEL_FAH = 1.8;

$param = $_POST['param'] ?? 0;
switch ($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param Km = $distancia Milhas";
        break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milhas = $distancia Km";
        break;
    case 'metro-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param Metros = $distancia KM";
        break;
    case 'km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param KM = $distancia Metros";
        break;
    case 'f-c':
        $conversao = ($param - 32) / FATOR_CEL_FAH;
        $mensagem = "{$param}° Fahrenheit = {$conversao}° Celsius";
        break;
    case 'c-f':
        $conversao = $param * FATOR_CEL_FAH + 32;
        $mensagem = "{$param}° Celsius = {$conversao}° Fahrenheit";
        break;
    default:
        $mensagem = "Nenhum valor calculado!";
}
echo $mensagem;
