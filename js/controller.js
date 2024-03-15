//o que será executado quando o documento acabar de carregar (estiver pronto)
$(document).ready(function(){

    //o que será executado quando clicar no elemento cujo id é listarUsuarios
    $("#listarUsuarios").click(function(){
        controller("listarNaTabela");
    })
  
    //o que será executado quando clicar no elemento cujo id é listarUsuariosCards
    $("#listarUsuariosCards").click(function(){
        controller("listarEmCards");
    })

    $("#cadastrarProduto").click(function(){
        controller("inserirProdutoForm");
    })

    //associar botão de deletar usuario que será inserido na página
    $('body').on('click', '.deletaUsuario', function(){
        controller("deletarUsuario", $(this).attr('id'));
    })

    $('body').on('click', '.editaUsuario', function(){
        controller("editarUsuario", $(this).attr('id'));
    })

    $('body').on('click', '#insereProduto_btn', function(){
        controller("inserirProduto_btn");
    })

    $("#editarFoto").click(function(){
        controller("editarFoto");
    })

  })