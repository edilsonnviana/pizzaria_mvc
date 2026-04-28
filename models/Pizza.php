<?php
require_once 'Conexao.php';

class Pizza {
    public $id;
    public $sabor;
    public $ingredientes;
    public $preco;

    public static function listarTodas() {
        $con = Conexao::getConexao();

        $sql = "SELECT * FROM pizzas ORDER BY sabor ASC";

        // A variável é $stmt (M de Maria)
        $stmt = $con->query($sql);

        // O retorno chama a mesma variável $stmt com a função fetchAll
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>