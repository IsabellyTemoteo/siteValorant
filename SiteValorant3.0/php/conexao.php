<?php

$hostname = "localhost";
$banco = "comunidade";
$usuario = "root";
$senha = "";

$conexao = mysqli_connect($hostname, $usuario, $senha, $banco);

if ($conexao->connect_errno){
    echo "<br>"."Erro ao conectar";
    echo $conexao->error;
} else {
    echo "<br>"."Conectado ao banco com sucesso!";
}
