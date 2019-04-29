<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FinançasP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../framework/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/Style.css">
</head>
<body>
    <div class="container">
        <div class="col-md-4 container-style">
           <form action="Home.php" method="post" id="form-login">
                <img src="../img/logo-1.png" alt="logo" class="img-fluid">
                <div class="form-group">
                    <input type="text" name="login" class="form-control" placeholder="Login">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Senha">
                </div>
                <div class="form-group" id="rodape-login">
                    <div>
                        <a href="FormularioUsuario.php">Criar Conta</a>
                        <span> | </span>
                        <a href="#">Esqueceu a Senha?</a>
                    </div>
                    <button type="submit" name="logar" value="logar" class="btn btn-primary">Acessar</button>
                </div>
            </form> 
        </div>
    </div>
</body>
</html>