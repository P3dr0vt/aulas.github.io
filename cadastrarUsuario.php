<?php
//inclui a conexão
include "conexao.php";

//atribui os valores do form para variáveis
$email = $_REQUEST['email'];
$senha = $_REQUEST['senha'];
$nome = $_REQUEST['nome'];

//monta a consulta na conexão
$consulta_user = $conexao->prepare("SELECT * FROM user WHERE email = :email");
$consulta_user->bindParam(":email", $email);

try
{
    //executa a consulta
    $consulta_user->execute();
    //verifica o resultado
    $user = $consulta_user->fetch();
    if($user)
    {
        echo "Usuário já cadastrado com este e-mail!";
        exit;
    }
    else
    {
        //hash para a senha
        $senha = password_hash($senha, PASSWORD_DEFAULT);

        //consulta para inserir
        $consulta_insere_user = $conexao->prepare("INSERT INTO user (id_user, email, password, type, name) VALUES (NULL, :email, :senha, '0', :nome)");
        $consulta_insere_user->bindParam(":email", $email);
        $consulta_insere_user->bindParam(":senha", $senha);
        $consulta_insere_user->bindParam(":nome", $nome);

        //exexuta a consulta SQL
        if($consulta_insere_user->execute())
        {
            //mensagem de ok
            echo "Usuario cadastrado com sucesso!";
                  exit;
        }
        else
        {
            //mensagem de erro
            echo "Não foi possível cadastrar";
                exit;
        }
    }
}
catch(PDOException $e)
{
    echo "Não foi possível cadastrar!";
}

//Fecha a conexão
$conexao = null;

?>