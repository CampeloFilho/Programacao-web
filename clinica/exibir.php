<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/materialize.min.css">
        
        <title>Exibir</title>
    </head>
    <body>
        <div>
            <table class="responsive-table bordered">
                <thead class=" pink darken white-text">
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>Sobrenome</td>
                        <td>E-mail</td>
                        <td>Telefone</td>
                    </tr>
                </thead>
                <?php
                    include "./conexao.php";
                    $sql = "SELECT * FROM cliente";
                    $resultado = mysqli_query($con, $sql);

                    while ($dados = mysqli_fetch_array($resultado)){
                 ?>
                <tbody>
                    <tr>
                        <td><?php echo $dados['id']?></td>
                        <td><?php echo $dados['nome']?></td>
                        <td><?php echo $dados['sobrenome']?></td>
                        <td><?php echo $dados['email']?></td>
                        <td><?php echo $dados['telefone']?></td>
                    </tr>
                </tbody>
                <?php }?>
            </table>
        </div>
    </body>
</html>