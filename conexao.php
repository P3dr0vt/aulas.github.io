<?php

//parametros de conexao
$host = "localhost";
$user = "root";
$password = "";
$database = "paperlaria";

try
{
    //conecta
    $conexao = new PDO("mysql:host=".$host.";dbname=".$database.";charset=utf8", $user, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

?>