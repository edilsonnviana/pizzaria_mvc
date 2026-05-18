<!-- view/includes/mensagens.php -->

<?php if(isset($_GET['status'])): ?>
    <?php if($_GET['status'] == 'sucesso'): ?>
        
        <div id="modalFeedback" class="w3-modal" style="display:block;">
            <div class="w3-modal-content w3-animate-top w3-card-4 w3-round-large" style="max-width:500px">
                <header class="w3-container w3-green w3-round-large" style="border-bottom-left-radius:0; border-bottom-right-radius:0;">
                    <span onclick="document.getElementById('modalFeedback').style.display='none'" class="w3-button w3-display-topright w3-round-large w3-hover-red">&times;</span>
                    <h2>🍕 Pedido Confirmado!</h2>
                </header>
                <div class="w3-container w3-padding-16 w3-center">
                    <p class="w3-large">Seu pedido foi enviado para a cozinha com sucesso!</p>
                    <p class="w3-text-grey">O tempo estimado para entrega é de <b>30 a 40 minutos</b>.</p>
                    <button onclick="document.getElementById('modalFeedback').style.display='none'" class="w3-button w3-black w3-round w3-margin-top w3-padding-large">OK, Entendi!</button>
                </div>
            </div>
        </div>

    <?php elseif($_GET['status'] == 'erro'): ?>
        
        <div id="modalFeedback" class="w3-modal" style="display:block;">
            <div class="w3-modal-content w3-animate-top w3-card-4 w3-round-large" style="max-width:500px">
                <header class="w3-container w3-red w3-round-large" style="border-bottom-left-radius:0; border-bottom-right-radius:0;">
                    <span onclick="document.getElementById('modalFeedback').style.display='none'" class="w3-button w3-display-topright w3-round-large">&times;</span>
                    <h2>⚠️ Ops! Algo deu errado.</h2>
                </header>
                <div class="w3-container w3-padding-16 w3-center">
                    <p class="w3-large">Não foi possível processar seu pedido no momento.</p>
                    <p class="w3-text-grey">Por favor, tente novamente ou ligue para nós.</p>
                    <button onclick="document.getElementById('modalFeedback').style.display='none'" class="w3-button w3-black w3-round w3-margin-top w3-padding-large">Fechar</button>
                </div>
            </div>
        </div>

    <?php endif; ?>
<?php endif; ?>