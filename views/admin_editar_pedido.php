<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Pedido</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="w3-light-grey">

    <div class="w3-bar w3-black w3-padding">
        <span class="w3-bar-item w3-large">⚙️ Atualizar Pedido #<?= $pedido['id'] ?></span>
        <a href="index.php?acao=admin" class="w3-bar-item w3-button w3-right w3-red w3-round">Cancelar</a>
    </div>

    <div class="w3-container w3-padding-32">
        <div class="w3-content w3-white w3-card-4 w3-padding w3-round" style="max-width:600px">
            
            <form class="w3-container w3-padding-16" action="index.php?acao=atualizar_pedido" method="POST">
                <!-- ID Oculto para o servidor saber quem atualizar -->
                <input type="hidden" name="id" value="<?= $pedido['id'] ?>">

                <p>
                    <label><b>Cliente</b></label>
                    <input class="w3-input w3-border w3-light-grey" type="text" value="<?= htmlspecialchars($pedido['cliente_nome']) ?>" disabled>
                </p>

                <p>
                    <label><b>Sabor da Pizza</b></label>
                    <input class="w3-input w3-border w3-light-grey" type="text" value="<?= htmlspecialchars($pedido['sabor']) ?>" disabled>
                </p>

                <p>
                    <label><b>Avançar Status</b></label>
                    <select class="w3-select w3-border" name="status" required>
                        <!-- O PHP marca com 'selected' o status atual salvo no banco -->
                        <option value="Pendente" <?= $pedido['status'] == 'Pendente' ? 'selected' : '' ?>>🔴 Pendente</option>
                        <option value="Em Preparo" <?= $pedido['status'] == 'Em Preparo' ? 'selected' : '' ?>>🟠 Em Preparo</option>
                        <option value="Pronto" <?= $pedido['status'] == 'Pronto' ? 'selected' : '' ?>>🔵 Pronto</option>
                        <option value="Entregue" <?= $pedido['status'] == 'Entregue' ? 'selected' : '' ?>>🟢 Entregue</option>
                    </select>
                </p>

                <p>
                    <button class="w3-button w3-blue w3-block w3-round" type="submit"><b>SALVAR STATUS</b></button>
                </p>
            </form>

        </div>
    </div>

</body>
</html>