<?php
//inclui sessão
include "sessao.php";
//pega o id da sessão
$id = $_SESSION['id'];

//inclui conexao
include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_FILES["imagem"])) {

        //pasta no servidor pra onde a imagem vai
        $targetDir = "uploads/";
        
        //pega o tipo do arquivo
        $imageFileType = strtolower(pathinfo($_FILES["imagem"]["name"], PATHINFO_EXTENSION));

        //monta o nome do arquivo
        $imageName = "foto_".$id.".".$imageFileType;

        //uploads/foto_$id.$imageFileType
        $targetFile = $targetDir . $imageName;

        //variável de controle para verificações sobre o arquivo
        $uploadOk = 1;

        // Verificar se o arquivo é uma imagem
        $check = getimagesize($_FILES["imagem"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "O arquivo não é uma imagem válida.";
            $uploadOk = 0;
        }

        // Verificar se o arquivo já existe
        /*if (file_exists($targetFile)) {
            echo "Desculpe, o arquivo já existe.";
            $uploadOk = 0;
        }*/

        // Verificar tamanho máximo do arquivo (opcional)
        if ($_FILES["imagem"]["size"] > 5000000) {
            echo "Desculpe, o arquivo é muito grande.";
            $uploadOk = 0;
        }

        // Permitir apenas alguns formatos de imagem
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Desculpe, apenas arquivos JPG, JPEG, PNG e GIF são permitidos.";
            $uploadOk = 0;
        }

        // inserir o nome da imagem na tabela de usuarios
        $consulta_img = $conexao->prepare("UPDATE user SET image_file = :foto WHERE id_user = :id");
        $consulta_img->bindParam(":foto", $imageName);
        $consulta_img->bindParam(":id", $id);
        if(!$consulta_img->execute())
        {
            echo "Não foi possível inserir no BD";
            $uploadOk = 0;
        }

        // Se tudo estiver OK, faça o upload do arquivo
        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $targetFile)) {
                //echo "A imagem foi enviada com sucesso.";
                header("Location:home.php");
            } else {
                echo "Desculpe, ocorreu um erro ao enviar seu arquivo.";
            }
        }
    } else {
        echo "Nenhum arquivo foi enviado.";
    }
}

?>