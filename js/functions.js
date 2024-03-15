function controller(action, id)
{
    switch(action)
    {
        case 'listarNaTabela':
            desenhaTabela();
        break;
        case 'listarEmCards':
            desenhaCards();
        break;
        case 'deletarUsuario':
          deletaUsuario(id);
        break;
        case 'editarUsuario':
          desenhaFormUsuario(id);
        break;
        case 'editarFoto':
          desenhaFormImagem();
        break;
        case 'inserirProdutoForm':
          desenhaFormProduto();
        break;
        case 'inserirProduto_btn':
          insereProduto();
        break;
    }
}

function desenhaFormImagem()
{
  var form = '<form action="uploadImagem.php" method="POST" enctype="multipart/form-data">';
  form += '<input type="file" name="imagem">';
  form+= '<input type="submit" value="Upload">';
  form+= '</form>';
  $("#painel").html(form);
}

function desenhaFormUsuario(id)
{
  $.post("selecionarUsuarioJSON.php", {id_user : id}, function(data){
    var user = JSON.parse(data);
    var form = "<form method='POST' action='editarUsuario.php'>";
    form += "     <input type='hidden' name='id' value='"+id+"'>";
    form += "     <p>Nome: <input class='w3-input w3-padding-16 w3-border' type='text' name='nome' value='"+user['name']+"'>";
    form += "     <p>Email: <input class='w3-input w3-padding-16 w3-border' type='email' name='email' value='"+user['email']+"'>";
    form += "     <p>Tipo: <input class='w3-input w3-padding-16 w3-border' type='text' name='tipo' value='"+user['type']+"'>";
    form += "     <p><input class='w3-button w3-light-grey' type='submit' value='Atualizar'>";
    form += "    </form>";
    $("#painel").html(form);
  })
}

function desenhaFormProduto()
{
  var form = "<form id='formProduto' method='POST'>";
  form += "     <p>Descrição: <input class='w3-input w3-padding-16 w3-border' type='text' name='descricao'>";
  form += "     <p>Preco: <input class='w3-input w3-padding-16 w3-border' type='text' name='preco'>";
  form += "     <p><input id='insereProduto_btn' class='w3-button w3-light-grey' type='button' value='Cadastrar'>";
  form += "    </form>";
  $("#painel").html(form);
}

function insereProduto()
{
  $.post("insereProduto.php", $("#formProduto").serialize(), function(data){
    alert(data);
  })
}

function desenhaTabela()
{
    //faz a requisição assincrona
    $.post("listarUsuariosJSON.php", function(data){
      
      //decodifica o JSON retornado pelo servidor em data para o vetor
      var users = JSON.parse(data);

      //monta a tabela com os dados do vetor para exibir no painel
      var table = "<table class='w3-table w3-striped'>";
      for(i = 0; i < users.length; i++)
      {
        table += "<tr id='tr"+users[i]["id_user"]+"'><td><button class='deletaUsuario' id='"+users[i]["id_user"]+"'>Del</button><button class='editaUsuario' id='"+users[i]["id_user"]+"'>Edit</button></td><td>"+users[i]['name']+"</td><td>"+users[i]['email']+"</td><td>"+users[i]['type']+"</td></tr>";
      }
      table += "</table>";

      //insere a table no painel
      $("#painel").html(table);
    })
}

function deletaUsuario(id)
{
    $.post("deletarUsuario.php", {id_user : id}, function(data){
        alert(data);
        $("#tr"+id).remove();
    })
}

function desenhaCards()
{
    //faz a requisição assincrona
    $.post("listarUsuariosJSON.php", function(data){
      
      //decodifica o JSON retornado pelo servidor em data para o vetor
      var users = JSON.parse(data);

      //monta a tabela com os dados do vetor para exibir no painel
      var cards = "<div class='w3-container'>";
      for(i = 0; i < users.length; i++)
      {
        cards += "<div class='w3-card'><p>Nome: "+users[i]['name']+"</p><p>Email: "+users[i]['email']+"</p><p>Tipo: "+users[i]['type']+"</p></div>";
      }
      cards += "</div>";

      //insere a table no painel
      $("#painel").html(cards);
    })
}
