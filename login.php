<?php
//inclui a conexão
include "conexao.php";

//se não vier e-mail redireciona para index.php
if(!isset($_REQUEST['email']) || !isset($_REQUEST['senha']))
{
    header("Location:index.php");
    exit;
}    

//pega dados do e-mail
$email = $_REQUEST['email'];
$senha = $_REQUEST['senha'];

//monta consulta preparada
$consulta_user = $conexao->prepare("SELECT * FROM user WHERE email = :email");
$consulta_user->bindParam(':email', $email);

//executa a consulta
$consulta_user->execute();

//atribui o registro retornado para $user
$user = $consulta_user->fetch();

if($user)
{
    if(password_verify($senha, $user['password']))
    {
        session_start();
        $_SESSION['nome'] = $user['name'];
        $_SESSION['email'] = $user['email'];
        if($user['type'] == 1)
            {
                $response = array('status' => 'success', 'redirect' => 'homeAdmin.php');
                echo json_encode($response);
                exit;
            }
        else
        {
            $response = array('status' => 'success', 'redirect' => 'home.php');
            echo json_encode($response);
            exit;
        }
    }
    else
    {
        $response = array('status' => 'error', 'message' => 'Senha incorreta!');
        echo json_encode($response);
        exit;
    }    
}
else
{
    $response = array('status' => 'error', 'message' => 'Usuário não cadastrado!');
    echo json_encode($response);
    exit;
}

//fecha conexao
$conexao = null;

?>