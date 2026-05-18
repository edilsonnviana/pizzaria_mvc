<?php
// index.php - Front Controller (Ponto único de entrada)

// 1. INICIALIZA A SESSÃO (A "Pulseira VIP")
// 🚨 ATENÇÃO: Nada pode ser impresso na tela antes desta linha, nem mesmo um espaço em branco!
session_start();

// 2. MODO DEBUG ATIVADO (Para facilitar a caça aos bugs em sala de aula)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 3. IMPORTAÇÃO DOS CONTROLLERS
require_once 'controllers/PizzaController.php';
require_once 'controllers/PedidoController.php';
require_once 'controllers/UsuarioController.php';

// 4. CAPTURA A AÇÃO DA URL (Roteamento)
$acao = isset($_GET['acao']) ? $_GET['acao'] : 'listar';

// 5. O GRANDE SWITCH DE ROTAS
switch ($acao) {
    
    // ==========================================
    // ROTAS DE AUTENTICAÇÃO
    // ==========================================
    case 'login':
        $usuCont = new UsuarioController();
        $usuCont->telaLogin();
        break;
        
    case 'logar':
        $usuCont = new UsuarioController();
        $usuCont->logar();
        break;
        
    case 'sair':
        $usuCont = new UsuarioController();
        $usuCont->sair();
        break;

    // ==========================================
    // ROTAS PROTEGIDAS (Área do Gerente/Admin)
    // ==========================================
    case 'admin':
        // O Segurança da Porta: Verifica se o usuário logou
        if (!isset($_SESSION['usuario_logado'])) {
            header("Location: index.php?acao=login");
            exit; // Para a execução do script imediatamente
        }
        $pedidoCont = new PedidoController();
        $pedidoCont->painelAdmin();
        break;

    case 'editar_pedido':
        if (!isset($_SESSION['usuario_logado'])) {
            header("Location: index.php?acao=login");
            exit;
        }
        $pedidoCont = new PedidoController();
        $pedidoCont->editar();
        break;

    case 'atualizar_pedido':
        if (!isset($_SESSION['usuario_logado'])) {
            header("Location: index.php?acao=login");
            exit;
        }
        $pedidoCont = new PedidoController();
        $pedidoCont->atualizar();
        break;

    // ==========================================
    // ROTAS PÚBLICAS (Visão do Cliente)
    // ==========================================
    case 'salvar_pedido':
        $pedidoCont = new PedidoController();
        $pedidoCont->cadastrar();
        break;

    // Se a ação for 'listar' ou qualquer coisa não reconhecida, mostra a Home
    case 'listar':
    default:
        $pizzaCont = new PizzaController();
        $pizzaCont->listarCardapio();
        break;
        // Rotas de Exclusão e Inserção no index.php
    case 'excluir_pedido':
        if (!isset($_SESSION['usuario_logado'])) { header("Location: index.php?acao=login"); exit; }
        $pedidoCont = new PedidoController();
        $pedidoCont->deletar();
        break;

    case 'novo_pedido':
        if (!isset($_SESSION['usuario_logado'])) { header("Location: index.php?acao=login"); exit; }
        $pedidoCont = new PedidoController();
        $pedidoCont->novoPedido();
        break;

    case 'salvar_pedido_admin':
        if (!isset($_SESSION['usuario_logado'])) { header("Location: index.php?acao=login"); exit; }
        $pedidoCont = new PedidoController();
        $pedidoCont->cadastrarAdmin();
        break;
}
?>