<?php

/* COMANDOS SQL:

CREATE schema comunidade;
USE comunidade;

CREATE TABLE `dados_player` (
  `id_player` int(11) NOT NULL,
  `tempo_treinando` int(2) NOT NULL,
  `tempo_jogando` int(2) NOT NULL,
  `estilo` varchar(30) NOT NULL,
  `rank` varchar(30) NOT NULL
);

CREATE TABLE `dados_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nickname` varchar(30) NOT NULL,
  `idade` int(2) NOT NULL,
  `região` varchar(50) NOT NULL
);

ALTER TABLE `dados_player`
  ADD PRIMARY KEY (`id_player`);

ALTER TABLE `dados_user`
  ADD PRIMARY KEY (`id_user`);

ALTER TABLE `dados_player`
  MODIFY `id_player` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `dados_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `dados_player`
  ADD CONSTRAINT `dados_player` FOREIGN KEY (`id_player`) REFERENCES `dados_user` (`id_user`);
*/

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

?>