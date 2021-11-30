<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/materialize.css">
        <link rel="stylesheet" href="css/materialize.min.css">
        <title>Recebe</title>
       
    </head>
    <body>
        <?php
            include "./conexao.php";

            $nome = $_POST ['nome'];
            $sobrenome = $_POST ['sobrenome'];
            $email = $_POST ['email'];
            $senha = $_POST ['senha'];

            $inserir = $con -> query("INSERT INTO cadastro values ('$nome', '$sobrenome', '$email', '$senha')");
        
            if ($inserir) {
                echo "Cadastro realizado";
                
            }else{
                echo "Cadastro não realizado";
                
            }
        ?>
    </body>
</html>