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

//monta um array com os registros resultantes da consulta
$users = array();
while($aUser = $consulta_users->fetch())
{
    $user = array(
        "id_user" => $aUser['id_user'],
        "name" => $aUser['name'],
        "email" => $aUser['email'],
        "type" => $aUser['type']
    );
    $users[] = $user;
}

//codifica $users para JSON
$json = json_encode($users);

//envia resultado
echo $json;

?>