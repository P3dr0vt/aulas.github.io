<?php
//include sessao
include "sessao.php";

//dados de conexão
include "conexao.php";

//consulta para selecionar todos os usuários
$consulta_users = $conexao->prepare("SELECT * FROM user");
$consulta_users->execute();

//fecha conexão
$conexao = null;

//monta string com o resultado da consulta
$table = "<table class='w3-table w3-striped'>
                <tr><th>Nome</th><th>E-mail</th><th>Tipo</th></tr>";
while($aUser = $consulta_users->fetch())
{
    $table .= "<tr><td>".$aUser['name']."</td>";
    $table .= "<td>".$aUser['email']."</td>";
    $table .= "<td>".$aUser['type']."</td></tr>";
}
$table .= "</table>";

echo $table;

?>