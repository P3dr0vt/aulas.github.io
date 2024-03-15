<?php
//include sessao
include "sessao.php";

//dados de conexão
include "conexao.php";

//id do form
$id = $_REQUEST['id_user'];

//consulta para selecionar todos os usuários
$consulta_users = $conexao->prepare("SELECT * FROM user WHERE id_user = :id");
$consulta_users->bindParam(":id", $id);
$consulta_users->execute();

//fecha conexão
$conexao = null;

//monta vetor com registro retornado pela pesquisa
while($aUser = $consulta_users->fetch())
{
    $user = array(
        "id_user" => $aUser['id_user'],
        "name" => $aUser['name'],
        "email" => $aUser['email'],
        "type" => $aUser['type']
    );
}

//codifica $users para JSON
$json = json_encode($user);

//envia resultado
echo $json;

?>