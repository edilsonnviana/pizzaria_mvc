<?php
// controllers/UsuarioController.php
require_once 'models/Usuario.php';

class UsuarioController {
    
    // Mostra a tela de login
    public function telaLogin() {
        require_once 'views/login.php';
    }

    // Recebe o formulário e tenta logar
    public function logar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $login = $_POST['login'];
            $senha = $_POST['senha'];

            $usuario = Usuario::autenticar($login, $senha);

            if ($usuario) {
                // SUCESSO: Entrega a "Pulseira VIP" com o nome do usuário
                $_SESSION['usuario_logado'] = $usuario['nome'];
                header("Location: index.php?acao=admin"); // Manda pro painel
            } else {
                // FALHA: Volta pra tela de login com erro
                header("Location: index.php?acao=login&erro=1");
            }
        }
    }

    // Rasga a pulseira VIP e sai do sistema
    public function sair() {
        session_destroy(); // Destrói a sessão
        header("Location: index.php"); // Volta pra página do cliente
    }
}
?>