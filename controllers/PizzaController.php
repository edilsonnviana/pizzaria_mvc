<?php
// controllers/PizzaController.php

// O garçom precisa saber onde fica a cozinha (Model)
require_once 'models/Pizza.php';

class PizzaController {
    
    /**
     * MÉTODO DE AÇÃO (Action)
     * Esse método será chamado sempre que alguém acessar a página inicial.
     */
    public function listarCardapio() {
        
        // 1. O Controller pede para o Model ir buscar as pizzas no banco
        $listaPizzas = Pizza::listarTodas();
        
        // 2. O Controller pega a resposta ($listaPizzas) e "serve" na View
        // Como o require_once está aqui dentro, a View automaticamente "enxerga" a variável acima.
        require_once 'views/home.php';
    }
}
?>