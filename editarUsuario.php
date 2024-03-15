<?php
//inclui a conexão
include "conexao.php";

//atribui os valores do form para variáveis
$id = $_REQUEST['id'];
$email = $_REQUEST['email'];
$tipo = $_REQUEST['tipo'];
$nome = $_REQUEST['nome'];

//monta a consulta na conexão
$consulta_user = $conexao->prepare("UPDATE user set name = :nome, email = :email, type = :tipo WHERE id_user = :id");
$consulta_user->bindParam(":id", $id);
$consulta_user->bindParam(":nome", $nome);
$consulta_user->bindParam(":email", $email);
$consulta_user->bindParam(":tipo", $tipo);

//executa a consulta
if($consulta_user->execute())
{
    echo "<script>
            alert('Registro alterado!');
            window.location.href='homeAdmin.php';
          </script>";
}
else
{
    echo "<script>
            alert('Não foi possível alterar!');
            window.location.href='homeAdmin.php';
          </script>";
}
    
//Fecha a conexão
$conexao = null;

?>