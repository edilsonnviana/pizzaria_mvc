<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - Pizzaria</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="w3-light-grey" style="display:flex; align-items:center; justify-content:center; height:100vh;">

    <div class="w3-card-4 w3-white w3-round-large" style="width: 100%; max-width: 400px;">
        <div class="w3-container w3-black w3-center w3-round-large" style="border-bottom-left-radius: 0!important; border-bottom-right-radius: 0!important;">
            <h2><b>Acesso Restrito</b></h2>
        </div>

        <form class="w3-container w3-padding-32" action="index.php?acao=logar" method="POST">
            
            <?php if(isset($_GET['erro'])): ?>
                <div class="w3-panel w3-red w3-round">
                    <p>Login ou senha incorretos!</p>
                </div>
            <?php endif; ?>

            <p>
                <label><b>Usuário</b></label>
                <input class="w3-input w3-border w3-round" name="login" type="text" required>
            </p>
            <p>
                <label><b>Senha</b></label>
                <input class="w3-input w3-border w3-round" name="senha" type="password" required>
            </p>
            <p>
                <button class="w3-button w3-blue w3-block w3-round" type="submit"><b>ENTRAR</b></button>
            </p>
        </form>
    </div>

</body>
</html>