<img src="https://images.unsplash.com/photo-1590947132387-155cc02f3212?q=80&w=1920&auto=format&fit=crop" class="w3-image w3-greyscale" style="width:100%;" alt="Pizzaiolo preparando pedido">

<div class="w3-container w3-padding-64 w3-blue-grey w3-grayscale-min w3-xlarge">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">Contato e Pedidos</h1>
    <p>Faça seu pedido online preenchendo o formulário abaixo ou ligue para (11) 99999-9999.</p>
    <p class="w3-xxlarge"><strong>Peça agora:</strong></p>
    
    <form action="index.php?acao=salvar_pedido" method="POST">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Seu Nome" required name="cliente_nome"></p>
      
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Endereço de Entrega" required name="endereco"></p>
      
      <p>
        <select class="w3-select w3-padding-16 w3-border" name="pizza_id" required>
          <option value="" disabled selected>Escolha o sabor da sua Pizza</option>
          
          <?php 
          // O rodapé consegue "enxergar" a variável $listaPizzas que foi criada lá no index.php
          if (isset($listaPizzas)) {
              foreach ($listaPizzas as $pizza): 
          ?>
              <option value="<?= $pizza['id'] ?>">
                  <?= $pizza['sabor'] ?> - R$ <?= number_format($pizza['preco'], 2, ',', '.') ?>
              </option>
          <?php 
              endforeach; 
          }
          ?>
        </select>
      </p>
      <p><button class="w3-button w3-light-grey w3-block" type="submit">ENVIAR PEDIDO</button></p>
    </form>
  </div>
</div>

<footer class="w3-center w3-black w3-padding-48 w3-xxlarge">
  <p>Projeto MVC Modularizado - Aula de Desenvolvimento Web</p>
</footer>

<script src="assets/js/script.js"></script>

</body>
</html>