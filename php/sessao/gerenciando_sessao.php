<div class="titulo">Gerenciando Sessão</div>

<?php
session_id('bqae2m25tpbul4gigdoip1db85');
session_start();
echo session_id();

$contador = &$_SESSION['contador'];
// Se contador estiver setado, (?) acrescenta 1,
// caso contrario (:) atribui 1
$contador = $contador ? $contador + 1 : 1;
echo '<br>' . $_SESSION['contador'];

if ($_SESSION['contador'] % 5 === 0) {
    session_regenerate_id();
}

if ($_SESSION['contador'] >= 15) {
    session_destroy();
}
