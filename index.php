<!DOCTYPE html>
<html>
<head>
<title>Paperlaria</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="js/cookies.js"></script>
<style>
body, html {height: 100%}
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
.menu {display: none}
.bgimg {
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url("fundo.jpg");
  min-height: 90%;
}
</style>
</head>
<body onload="checkCookie()">

<!-- Navbar (sit on top) -->
<div class="w3-top w3-hide-small">
  <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
    <a href="#" class="w3-bar-item w3-button">HOME</a>
    <a href="#products" class="w3-bar-item w3-button">PRODUTOS</a>
    <a href="#about" class="w3-bar-item w3-button">SOBRE</a>
    <a href="#contact" class="w3-bar-item w3-button">CONTATO</a>
    <span style="text-align : right">
    <form id="formLogin" method="POST">
        E-mail: <input type="email" id="email" name="email" required>
        Senha: <input type="password" name="senha" required>
        <button id="btn_login" type="button">Login</button>
    </form>
    </span>
  </div>
</div>
  
<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-padding">
    <span class="w3-tag w3-xlarge">Aberto de 8h to 18h</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white w3-hide-small w3-black" style="font-size:100px">PAPERLARIA</span>
    <span class="w3-text-white w3-hide-large w3-hide-medium" style="font-size:60px"><b>PAPERLARIA</b></span>
    <p><a href="#products" class="w3-button w3-xxlarge w3-black">Veja os Produtos</a></p>
  </div>
</header>

<!-- Products Container -->
<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="products">
  <div class="w3-content">
  
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">PRODUTOS</h1>
    <div class="w3-row w3-center w3-border w3-border-dark-grey">
      <a href="javascript:void(0)" onclick="openMenu(event, 'cadernos');" id="myLink">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Cadernos</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'canetas');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Canetas e Lápis</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'outros');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Outros</div>
      </a>
    </div>

    <div id="cadernos" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Caderno Inteligente</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$100.00</span></h1>
      <p class="w3-text-grey">É um caderno que imita um fichário só que mais caro</p>
      <hr>
   
      <h1><b>Caderno de 10 máterias</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$15.50</span></h1>
      <p class="w3-text-grey">O tradicional caderno</p>
      <hr>
    </div>

    <div id="canetas" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Caneta BIC</b> <span class="w3-tag w3-grey w3-round">Popular</span> <span class="w3-right w3-tag w3-dark-grey w3-round">$1.50</span></h1>
      <p class="w3-text-grey">A caneta que tem vida própria</p>
      <hr>
   
      <h1><b>Caneta tinteiro</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$12.00</span></h1>
      <p class="w3-text-grey">De pena e não dá pena</p>
      <hr>
    </div>

    <div id="outros" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Mochila da Company</b> <span class="w3-tag w3-grey w3-round">Seasonal</span><span class="w3-right w3-tag w3-dark-grey w3-round">$200.00</span></h1>
      <p class="w3-text-grey">Essa é a top hein!?</p>
      <hr>
   
      <h1><b>Pacote de folha de fichário</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$10.00</span></h1>
      <p class="w3-text-grey">Já sabe né?</p>
      <hr>
  </div>
  <br>
</div>

<!-- About Container -->
<div class="w3-container w3-padding-64 w3-red w3-grayscale w3-xlarge" id="about">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">SOBRE</h1>
    <p>A Paperlaria foi fundada na aula de Programação para Web em 2023 no CEFET-MG campus Nepomuceno, com a melhor? turma que já passou por aqui! Veremos!</p>
    <p><strong>Professor:</strong> Paulo Lima</p>
    <p>Muito bom essa matéria!</p>
    
    <h1><b>Horário das aulas</b></h1>
    
    <div class="w3-row">
      <div class="w3-col s6">
        <p>Seg, Ter, Qui e Sex FECHADO</p>
        <p>Quarta 8h40 - 10h40</p>
        <p>Sexta 13h00 - 14h00 Estudar</p>
      </div>
      <div class="w3-col s6">
        <p>Sábado 19:00 - 23:00 Estudar</p>
        <p>Domingo 9h00 - 12h00 Estudar</p>
      </div>
    </div>
    
  </div>
</div>

<!-- Contact -->
<div class="w3-container w3-padding-64 w3-blue-grey w3-grayscale-min w3-xlarge" id="contact">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">CONTATO</h1>
    <p>Endereço: Avenida Monsenhor Luis Gonzaga, Nepomuceno MG</p>
    <p><span class="w3-tag">Telefone: </span> 0938457098234</p>
    <p class="w3-xxlarge"><strong>Cadastre-se</strong> e saiba mais sobre nossos produtos na área logada</p>
    
    <!-- Form Cadastro -->
    <form id="form_cadastro">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Nome" required name="nome"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="email" placeholder="E-mail" required name="email"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="password" placeholder="Senha" required name="senha"></p>
      <p><button id="btn_cadastro" class="w3-button w3-light-grey w3-block" type="button">CADASTRAR</button></p>
    </form>
    <div id="msg_cadastro"></div>
    <script>
     $(document).ready(function(){

      $("#btn_login").click(function(){
          $.post("login.php", $("#formLogin").serialize(), function(data){
            var response = JSON.parse(data);
            if (response.status === 'success') {
                window.location.href = response.redirect;
            } 
            else
            {
              alert(response.message);
            }
            //cria username com o valor que está na caixa de email
            setCookie("username", $("#email").val());
          });
        })

        $("#btn_cadastro").click(function(){
          $.post("cadastrarUsuario.php", $("#form_cadastro").serialize(), function(data){
            $("#msg_cadastro").html(data);
          })
        })
      })
    </script>

  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-48 w3-xxlarge">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-red";
}
document.getElementById("myLink").click();
</script>

</body>
</html>