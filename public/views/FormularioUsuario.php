<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FinançasP</title>
<!--    Styles -->
    <link rel="stylesheet" href="../../framework/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../recursos/styles/Style.css">
</head>
<body>
    <div class="container">
        <div class="col-md-5 container-style">
            <form action="../controllers/usuario.php" method="post" id="form-cadastro-usuario">
                <h3>Cadastro</h3>
                <hr>
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" placeholder="Nome" class="form-control">
                </div>
                <div class="form-group">
                    <label for="sobrenome">Sobrenome:</label>
                    <input type="text" name="sobrenome" placeholder="Sobrenome" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="login">Login:</label>
                    <input type="text" name="login" placeholder="Login" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password" class="password">Senha:</label>
                    <input type="password" name="password" placeholder="Senha" class="form-control">
                </div>
                <div class="form-group" id="btn-cadastrar">
                    <button type="submit" name="cadastrar" value="cadastro" class="btn btn-primary" onclick="validarSenha()">Cadastrar-Se</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>