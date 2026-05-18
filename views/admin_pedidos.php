<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin - Pizzaria</title>
    <!-- Puxando o W3.CSS direto para o painel não perder o estilo -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="w3-light-grey">

    <!-- BARRA SUPERIOR EXCLUSIVA DO ADMIN -->
    <div class="w3-bar w3-black w3-padding">
        <span class="w3-bar-item w3-large w3-hide-small">⚙️ Gerenciamento de Pedidos</span>
        <!-- Botão para o gerente voltar para a visão do cliente -->
        <a href="index.php" class="w3-bar-item w3-button w3-right w3-red w3-round w3-hover-orange">
            Sair do Painel
        </a>
    </div>

    <!-- CONTEÚDO PRINCIPAL (TABELA) -->
    <div class="w3-container w3-padding-32">
        <div class="w3-content" style="max-width:1200px">
            
            <h2 class="w3-center w3-margin-bottom"><b>Controle de Pedidos</b></h2>
            
            <!-- Botão de Inserir Novo (Direto pelo Admin) -->
            <div class="w3-margin-bottom">
                <a href="index.php?acao=novo_pedido" class="w3-button w3-green w3-round"><b>+ Novo Pedido Manual</b></a>
            </div>

            <div class="w3-responsive w3-white w3-card-4">
                <table class="w3-table-all w3-hoverable">
                    <thead>
                        <tr class="w3-dark-grey">
                            <th>ID</th>
                            <th>Cliente</th>
                            <th>Sabor</th>
                            <th>Data/Hora</th>
                            <th>Status</th>
                            <th class="w3-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($listaPedidos)): ?>
                            <?php foreach($listaPedidos as $ped): ?>
                                <tr>
                                    <td>#<?= $ped['id'] ?></td>
                                    <td><b><?= htmlspecialchars($ped['cliente_nome']) ?></b></td>
                                    <td><?= htmlspecialchars($ped['sabor']) ?></td>
                                    <!-- Formatando a data padrao do banco para o padrão brasileiro -->
                                    <td><?= date('d/m/Y H:i', strtotime($ped['data_pedido'])) ?></td>
                                    <td>
                                        <!-- Cor dinâmica baseada no status -->
                                        <?php 
                                            $corStatus = 'w3-grey';
                                            if($ped['status'] == 'Pendente') $corStatus = 'w3-red';
                                            if($ped['status'] == 'Em Preparo') $corStatus = 'w3-orange w3-text-white';
                                            if($ped['status'] == 'Pronto') $corStatus = 'w3-blue';
                                            if($ped['status'] == 'Entregue') $corStatus = 'w3-green';
                                        ?>
                                        <span class="w3-tag w3-round <?= $corStatus ?>"><?= $ped['status'] ?></span>
                                    </td>
                                    <td class="w3-center">
                                        <!-- Troque o href="#" por este link: -->
                                        <a href="index.php?acao=editar_pedido&id=<?= $ped['id'] ?>" class="w3-button w3-small w3-blue w3-round">Editar</a>
                                        <a href="index.php?acao=excluir_pedido&id=<?= $ped['id'] ?>" 
                                        onclick="return confirm('Tem certeza que deseja apagar o pedido #<?= $ped['id'] ?>? Essa ação não pode ser desfeita!');" 
                                        class="w3-button w3-small w3-red w3-round">Excluir</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr><td colspan="6" class="w3-center w3-padding-16">Nenhum pedido encontrado.</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</body>
</html>