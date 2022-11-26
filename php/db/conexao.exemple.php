<?php

function novaConexao($banco = 'dbname')
{
    $servidor = 'server';
    $usuario = 'user';
    $senha = 'password';

    $conexao = new mysqli($servidor, $usuario, $senha, $banco);
    if ($conexao->connect_error) {
        die('Erro: ' . $conexao->connect_erro);
        // echo ('Erro: ' . $conexao->connect_erro);
        // exit();
    }

    return $conexao;
}
