🍕 Sistema de Gestão para Pizzaria (PHP MVC)

Este é um sistema completo para gerenciamento de pedidos de uma pizzaria, desenvolvido com a arquitetura MVC (Model-View-Controller) em PHP. O projeto conta com uma área pública para clientes realizarem pedidos e um Painel Administrativo seguro para o gerenciamento do status de produção, além de uma suíte de testes E2E (End-to-End) automatizados.

✨ Funcionalidades

🧑‍🍳 Área Pública (Cliente)

Visualização do cardápio completo de pizzas com preços.

Formulário simples e direto para realizar um pedido (Nome, Endereço e Sabor).

Feedback visual de sucesso ao registrar o pedido.

⚙️ Painel Administrativo (Gerente)

Autenticação Segura: Acesso restrito via Login e Sessão (session_start()).

CRUD Completo de Pedidos:

Create: Registro de pedidos manuais no balcão.

Read: Tabela de controle com painel visual e tags de cores para o status de cada pizza.

Update: Edição do status de produção (🔴 Pendente ➔ 🟠 Em Preparo ➔ 🔵 Pronto ➔ 🟢 Entregue).

Delete: Exclusão de registros com trava de segurança preventiva em JavaScript.

🤖 Automação de Qualidade (QA)

Robôs de teste desenvolvidos em Python + Selenium WebDriver.

Scripts que simulam a navegação humana: realizam login, preenchem formulários, interagem com menus suspensos e validam o carregamento de páginas.

🛠️ Tecnologias Utilizadas

Back-end: PHP 8+ (Orientação a Objetos, PDO).

Front-end: HTML5, CSS3, W3.CSS (Framework de estilos limpo e responsivo), JavaScript.

Banco de Dados: MariaDB / MySQL.

Testes Automatizados: Python 3, Selenium, Virtual Environment (venv).

📁 Arquitetura do Projeto (MVC)

O sistema segue rigorosamente o padrão de separação de responsabilidades:

/models: Classes que representam as regras de negócio e a conexão direta com o Banco de Dados (Conexao.php, Pedido.php, Pizza.php).

/Views: Telas e interface do usuário, separadas entre a visão do cliente e do administrador.

/controllers: O cérebro do sistema, recebe as requisições da URL, pede os dados ao Model e carrega a View apropriada.

index.php: Front Controller. Ponto único de entrada e roteador do sistema.

🚀 Como Rodar o Projeto Localmente

1. Configurando o Servidor PHP

Clone este repositório para o seu computador:

git clone https://github.com/SEU-USUARIO/SEU-REPOSITORIO.git


Mova a pasta do projeto para o diretório público do seu servidor web local (ex: htdocs no XAMPP ou /var/www/html no Linux).

Importe o arquivo pizzaria_mvc.sql (disponível na raiz do projeto) para o seu gerenciador de banco de dados (ex: phpMyAdmin).

Acesse o sistema pelo navegador: http://localhost/NOME_DA_PASTA/index.php.

(Credenciais padrão de admin: Login admin | Senha senha123)

Projeto desenvolvido para fins didáticos e laboratório prático de Engenharia de Software e Qualidade de Sistemas.
