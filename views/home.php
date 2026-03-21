<?php 
// 1. CHAMA O CABEÇALHO (HTML, CSS, NAVBAR, BANNER)
include_once 'views/includes/cabecalho.php'; 
?>

<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu">
  <div class="w3-content">
  
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">O CARDÁPIO</h1>
    
    <div class="w3-row w3-center w3-border w3-border-dark-grey">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Pizza');" id="myLink">
        <div class="w3-col s12 tablink w3-padding-large w3-hover-red">Pizzas Tradicionais</div>
      </a>
    </div>

    <div id="Pizza" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Margherita</b> <span class="w3-right w3-tag w3-dark-grey w3-round">R$ 40,00</span></h1>
      <p class="w3-text-grey">Mussarela, tomate e manjericão fresco</p>
      <hr>
   
      <h1><b>Calabresa</b> <span class="w3-right w3-tag w3-dark-grey w3-round">R$ 45,00</span></h1>
      <p class="w3-text-grey">Mussarela, calabresa fatiada e cebola</p>
      <hr>
      
      <h1><b>Frango com Catupiry</b> <span class="w3-tag w3-red w3-round">Mais Pedida!</span><span class="w3-right w3-tag w3-dark-grey w3-round">R$ 50,00</span></h1>
      <p class="w3-text-grey">Mussarela, frango desfiado e catupiry original</p>
    </div>

  </div>
</div>

<div class="w3-container w3-padding-64 w3-red w3-grayscale w3-xlarge" id="about">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">Sobre a Pizzaria</h1>
    <p>Projeto acadêmico desenvolvido para demonstrar a aplicação prática do padrão MVC, separação de responsabilidades e reaproveitamento de código em módulos.</p>
  </div>
</div>

<?php 
// 2. CHAMA O RODAPÉ (MAPA, CONTATO, SCRIPT JS E FECHAMENTO DO HTML)
include_once 'views/includes/rodape.php'; 
?>