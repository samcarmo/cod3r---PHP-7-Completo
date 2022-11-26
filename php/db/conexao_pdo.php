<?php

function novaConexao($banco = 'db')
{
    $servidor = 'server';
    $usuario = 'user';
    $senha = 'password';

    try {
        $conexao = new PDO(
            "mysql:host=$servidor;dbname=$banco",
            $usuario,
            $senha
        );
        return $conexao;
    } catch (PDOException $e) {
        die('Erro: ' . $e->getMessage());
    }
}
