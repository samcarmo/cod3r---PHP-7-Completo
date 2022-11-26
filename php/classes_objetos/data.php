<div class="titulo">Classe Data</div>

<?php
// Dia 1, mes 1 ano 1970,
// Método apresentar, exibe a data 01/01/1970

class Data
{
    public $dia = 01;
    public $mes = 01;
    public $ano = 1970;

    public function apresentar()
    {
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$d1 = new Data();
echo $d1->apresentar(), '<br>';
// Solução

$aniversario = new Data();
$aniversario->dia = 15;
$aniversario->mes = 8;
$aniversario->ano = 2014;

$casamento = new Data();
$casamento->dia = 1;
$casamento->mes = 8;
$casamento->ano = 2009;

echo $aniversario->apresentar(), '<br>';
echo $casamento->apresentar();


