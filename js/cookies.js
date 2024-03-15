//cria o cookie
function setCookie(cname, cvalue)
{
  document.cookie = cname+"="+cvalue+";10000";
}

// Função para obter o valor de um cookie pelo nome
function getCookie(name) {
  // Separe os cookies em um array
  const cookies = document.cookie.split(';');

  // Itere pelos cookies
  for (let i = 0; i < cookies.length; i++) {
    const cookie = cookies[i].trim(); // Remova espaços em branco
    // Verifique se o cookie começa com o nome desejado
    if (cookie.startsWith(name + '=')) {
      // Retorne o valor do cookie (removendo o nome e o sinal de igual)
      return cookie.substring(name.length + 1);
    }
  }

  // Se o cookie não for encontrado, retorne null
  return null;
}

//verificar se existe cookie
function checkCookie()
{
  let user = getCookie("username");
  if(user != "")
    $("#email").val(user);
}