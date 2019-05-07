<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Minha Aplicação web</title>
    <link rel="stylesheet" type="text/css" href="/mvc_crud/css/login.css">
</head>

<body>
    <header>
        <div class="topnav">
            <a class="active" href="#login">Login</a>
        </div>
    </header>

    <section>
        <div>
            <form action="valida.php" method="POST">
                <label for="login">Login*:</label>
                <input type="text" id="login" name="login" min="5" max="10" required autofocus
                    placeholder="Seu nome de usuário">

                <label for="senha">Senha*:</label>
                <input type="password" id="senha" name="senha" min="5" max="10" required placeholder="12345">
                <?php
                    if(isset($_GET['login']) && $_GET['login'] == 'erro') { 
                ?>
                <div class="erro">
                    Usuário ou senha inválidos!
                </div>
                <?php }?>
                <input type="submit" class="btn-enviar" value="Login">
            </form>
        </div>
    </section>

    <footer>
        <div>
            <p>Desenvolvido por Carlos Eduardo Soares</p>
        </div>
    </footer>
</body>

</html>