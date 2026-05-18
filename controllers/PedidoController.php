<?php
// controllers/PedidoController.php
require_once 'models/Pedido.php';

class PedidoController {

    public function cadastrar() {
        // Verifica se a requisição veio do formulário (método POST)
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $novoPedido = new Pedido();
            
            // Pega os dados dos campos 'name' do seu formulário HTML
            $novoPedido->cliente_nome = $_POST['cliente_nome'];
            $novoPedido->endereco     = $_POST['endereco'];
            $novoPedido->pizza_id     = $_POST['pizza_id'];

            // Tenta salvar no banco e redireciona a tela
            if ($novoPedido->salvar()) {
                header("Location: index.php?status=sucesso");
            } else {
                header("Location: index.php?status=erro");
            }
        }
    }
   // Action para carregar a tela do Painel Administrativo
    public function painelAdmin() {
        // 1. Busca os pedidos para a tabela do Admin
        $listaPedidos = Pedido::listarTodos();
        
        // 2. CORREÇÃO: Busca as pizzas para o formulário do rodapé funcionar!
        require_once 'models/Pizza.php';
        $listaPizzas = Pizza::listarTodas();
        
        // 3. Chama a View
        require_once 'views/admin_pedidos.php';
    }
    // Action 1: Carrega a tela com o formulário preenchido
    public function editar() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $pedido = Pedido::buscarPorId($id); // Busca os dados no Model
            
            if ($pedido) {
                // Chama a View passando os dados do $pedido
                require_once 'views/admin_editar_pedido.php';
            } else {
                header("Location: index.php?acao=admin&status=erro");
            }
        }
    }

    // Action 2: Recebe o formulário e salva no banco
    public function atualizar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $status = $_POST['status'];

            if (Pedido::atualizarStatus($id, $status)) {
                // Se der certo, volta pro painel com mensagem de sucesso
                header("Location: index.php?acao=admin&status=sucesso");
            } else {
                header("Location: index.php?acao=admin&status=erro");
            }
        }
    }
    // Action: Recebe o ID da URL e manda o Model apagar
    public function deletar() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            
            if (Pedido::excluir($id)) {
                // Deletou? Volta pro painel com sucesso
                header("Location: index.php?acao=admin&status=sucesso");
            } else {
                header("Location: index.php?acao=admin&status=erro");
            }
        }
    }
    // Action 1: Carrega a tela do formulário vazio para o Gerente
    public function novoPedido() {
        // O formulário precisa da lista de pizzas para montar o <select>
        require_once 'models/Pizza.php';
        $listaPizzas = Pizza::listarTodas();
        
        require_once 'views/admin_novo_pedido.php';
    }

    // Action 2: Salva o pedido e volta para o painel Admin
    public function cadastrarAdmin() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $novoPedido = new Pedido();
            $novoPedido->cliente_nome = $_POST['cliente_nome'];
            $novoPedido->endereco     = $_POST['endereco'];
            $novoPedido->pizza_id     = $_POST['pizza_id'];

            if ($novoPedido->salvar()) { // Reutilizamos o mesmo método do Model!
                header("Location: index.php?acao=admin&status=sucesso");
            } else {
                header("Location: index.php?acao=admin&status=erro");
            }
        }
    }
}
?>