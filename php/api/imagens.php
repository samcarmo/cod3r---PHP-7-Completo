<div class="titulo">Imagens</div>

<?php
// session_start();
error_reporting(~E_ALL);

$arquivos = $_SESSION['arquivos'] ?? [];

$pastaUpload = __DIR__ . '/../files/';
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivo = $pastaUpload . $nomeArquivo;
var_dump($_SESSION['arquivos']);
$tmp = $_FILES['arquivo']['tmp_name'];
if (move_uploaded_file($tmp, $arquivo)) {
    echo "<br>Arquivo válido e enviado com sucesso.";
    $arquivos[] = $nomeArquivo;
    $_SESSION['arquivos'] = $arquivos;
} else {
    echo "<br>Erro no upload de arquivo!";
}
?>

<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <button>Enviar</button>
</form>

<ul>
    <?php foreach ($arquivos as $arquivo): ?>
        <?php if (stripos($arquivo, '.jpg') > 0): ?>
            <li>
                <img src="../files/<?= $arquivo ?>" height="120" />
            </li>
        <?php endif ?>
    <?php endforeach ?>
</ul>

<style>
    input,
    button {
        font-size: 2.1rem;
    }
</style>