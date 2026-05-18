<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Pedido - Admin</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="w3-light-grey">

    <div class="w3-bar w3-black w3-padding">
        <span class="w3-bar-item w3-large">⚙️ Registrar Novo Pedido (Balcão)</span>
        <a href="index.php?acao=admin" class="w3-bar-item w3-button w3-right w3-red w3-round w3-hover-orange">
            Cancelar
        </a>
    </div>

    <div class="w3-container w3-padding-32">
        <div class="w3-content w3-white w3-card-4 w3-padding w3-round-large" style="max-width:600px">
            
            <div class="w3-container w3-margin-bottom">
                <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"><b>Dados do Pedido</b></h3>
            </div>

            <form class="w3-container w3-padding-16" action="index.php?acao=salvar_pedido_admin" method="POST">
                
                <p>
                    <label class="w3-text-dark-grey"><b>Nome do Cliente</b></label>
                    <input class="w3-input w3-border w3-round" type="text" name="cliente_nome" placeholder="Ex: Maria Silva" required>
                </p>

                <p>
                    <label class="w3-text-dark-grey"><b>Endereço de Entrega / Mesa</b></label>
                    <input class="w3-input w3-border w3-round" type="text" name="endereco" placeholder="Ex: Mesa 04 ou Rua X, Quadra Y" required>
                </p>

                <p>
                    <label class="w3-text-dark-grey"><b>Sabor da Pizza</b></label>
                    <select class="w3-select w3-border w3-round" name="pizza_id" required>
                        <option value="" disabled selected>Escolha o sabor na lista...</option>
                        
                        <?php 
                        // Itera sobre o array enviado pela Action 'novoPedido' do Controller
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

                <p class="w3-margin-top">
                    <button class="w3-button w3-green w3-block w3-round w3-padding-large" type="submit">
                        <b>CONFIRMAR E REGISTRAR</b>
                    </button>
                </p>
            </form>

        </div>
    </div>

</body>
</html>