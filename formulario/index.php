<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/materialize.css">
        <link rel="stylesheet" href="css/materialize.min.css">
        <title>Cadastro</title>
    </head>
    <body>
        <div class="container">
            <h1>Cadastro</h1>
            <form action="recebe.php" method="post">
                <div class="row">
                    <div class="col s6">
                        <label>Nome</label>
                        <input type="text" name="nome">
                    </div>
                    <div class="col s6">
                        <label>Sobrenome</label>
                        <input type="text" name="sobrenome">
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <label>Email</label>
                        <input type="text" name="email">
                    </div>
                    <div class="col s6">
                        <label>Senha</label>
                        <input type="password" name="senha">
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <input type="submit" value="Enviar">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>