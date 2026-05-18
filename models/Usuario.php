<?php
// models/Usuario.php
require_once 'Conexao.php';

class Usuario {
    
    // O Segurança que confere o RG no Banco de Dados
    public static function autenticar($login, $senha) {
        $con = Conexao::getConexao();
        
        // Busca na tabela 'usuarios'
        $sql = "SELECT * FROM usuarios WHERE login = :login AND senha = :senha";
        $stmt = $con->prepare($sql);
        
        $stmt->bindValue(':login', $login);
        $stmt->bindValue(':senha', $senha);
        $stmt->execute();
        
        // Se achar, devolve os dados. Se não achar, devolve 'false'
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>