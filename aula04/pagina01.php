<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/materialize.css">
        <title>Página 01</title>
    </head>
    <body>
        <!--Formulário de cadastro-->
        <div class="container yellow">
            Cadastro de Clientes
            <form action="pagina01.php" method="post">
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
                    <div class="col s4">
                        <label>E-mail</label> 
                        <input type="text" name="email">
                    </div>
                    <div class="col s4">
                        <label>Idade</label> 
                        <input type="number" max="100" min="1" name="idade">
                    </div>
                    <div class="col s4">
                        <label>Telefone  </label> 
                        <input type="tel" name="telefone">
                    </div>
                    <div class="col s4">
                        <input type="submit" value="enviar">
                    </div>
                </form>
            </div>
        </div>
        <!--Código PHP-->
        <div class="container">
            <?php
                $nome = $_POST['nome'];
                $sobrenome = $_POST['sobrenome'];
                $email = $_POST['email'];
                $idade = $_POST['idade'];
                $telefone = $_POST['telefone'];

                echo"Nome é: ", $nome, "<br>";
                echo"Sobrenome é: ", $sobrenome, "<br>";
                echo"email é: ", $email, "<br>";
                echo"idade é: ", $idade, "<br>";
                echo"telefone é: ", $telefone, "<br>";


            ?>
        </div>
    </body>
</html>