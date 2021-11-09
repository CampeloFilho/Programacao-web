<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/materialize.min.css">
        <title>Dados dos clientes</title>

        <script>
            function ok() {
                setTimeout("window.location = 'index.php'" ,3000);
            }
        </script>

    </head>
    <body>
        <?php
            include "./conexao.php";

            $nome =      $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $email =     $_POST['email'];
            $telefone =  $_POST['telefone'];

            $inserir = $con -> query("INSERT INTO cad_cliente
            VALUES('0','$nome','$sobrenome','$email','$telefone')");

            if ($inserir) {
                echo "cadastro realizado";
                echo "<script> ok() </script>";
            }else {
                echo "cadastro não realizado";  
                echo "<script> ok() </script>";
            }
        ?>
    </body>
</html>