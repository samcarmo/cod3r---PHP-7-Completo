<div class="titulo">Primeira Classe</div>

<?php
class Cliente
{
    // Atributos
    public $nome = 'Anônimo';
    public $idade = 18;

    public function apresentar()
    {
        return "Nome: {$this->nome} Idade: {$this->idade}";
    }
}


$c1 = new Cliente();
echo $c1->nome, '<br>';
$c1->nome = 'Ana Silva';
$c1->idade = 27.5;
// $c1->apresentar();
echo $c1->nome, '<br>';

$c2 = new Cliente;
$c2->nome = 'Gabriel';
$c2->idade = 43;

echo $c1->apresentar(), '<br>';
echo $c2->apresentar();
