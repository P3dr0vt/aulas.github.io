<?php

//inicia a sessão
session_start();

//verifica se está logado
if(!isset($_SESSION['email']))
{
    header("Location:index.php");
}

?>