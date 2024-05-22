<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Controle de acesso</title>
    <link rel="shortcut icon" href="./imagem/astronauta.ico" type="image/x-icon"/>
</head>

<body>

    <form class="form" action="logar.php" method="POST">
        <div class="card">
            <div class="card-top">
                <img src="./imagem/user.png" id="user">
                <h2>Painel de Controle</h2>
                <p>Gerenciamento de negócio</p>
            </div>
            <div class="card-group">
                <label for="inputEmail">E-mail</label>
                <input type="email" name="email" id="inputEmail" placeholder="Digite seu e-mail" required>
            </div>

            <div class="card-group">
                <label for="inputPassword">Senha</label>
                <input type="password" name="senha" id="inputPassword" placeholder="Digite sua senha" required>
            </div>

            <div class="card-group">
                <label><input type="checkbox">Lembre-me</label>

            </div>

            <div class="card-group btn">

                <button type="submit">ACESSAR</button>

            </div>
        </div>
    </form>
</body>

</html>