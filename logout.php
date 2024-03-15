<?php

//inicia a sessão
session_start();

//destroi a sessão
session_destroy();

//redireciona para página inicial
header("Location:index.php");

?>