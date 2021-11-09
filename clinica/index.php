<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/materialize.min.css">
        <title>Cadastro - Clínica</title>
    </head>
    <body>
        <h1>Cadastro de pacientes</h1>
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
                    <label>E-mail</label>
                    <input type="email" name="email">
                </div>
                <div class="col s6">
                    <label>Telefone</label>
                    <input type="tel" name="telefone">
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Cadastrar">
            </div>
        </form> 
    </body>
</html>