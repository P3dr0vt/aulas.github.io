<?php
include "conexao.php";

$id = $_REQUEST["id_user"];

$deleta_user = $conexao->prepare("DELETE FROM user WHERE id_user = :id");
$deleta_user->bindParam(":id", $id);

if($deleta_user->execute())
{
    echo "Usuário deletado!";
}
else
{
    echo "Não foi possível deletar usuário!";
}

?>