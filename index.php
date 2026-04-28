<?php
// index.php - A única porta de entrada do sistema

// 1. Primeiro importamos o Model (O "Cozinheiro")
require_once 'models/Pizza.php';

// 2. Depois buscamos os dados no banco e guardamos na variável (O "Ingrediente")
// Agora a variável $listaPizzas existe e está pronta para ser usada!
$listaPizzas = Pizza::listarTodas();

// 3. Por último, chamamos a View (O "Prato pronto")
// Como a View é chamada depois, ela vai "enxergar" a variável $listaPizzas
require_once 'views/home.php';
?>