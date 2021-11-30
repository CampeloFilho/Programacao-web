<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/materialize.css">
        <link rel="stylesheet" href="css/materialize.min.css">
        <title>Exibir</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Nome</td>
                    <td>Sobrenome</td>
                    <td>Email</td>
                    <td>Senha</td>
                </tr>
            </thead>
            <?php
                include "./conexao.php";
                $sql = "SELECT * FROM cadastro";
                $res = mysqli_query($con, $sql);

                while ($dados = mysqli_fetch_array($res)) {
            ?>
            <tbody>
                <tr>
                    <td><?php echo $dados = ['id'];?></td>
                    <td><?php echo $dados = ['nome'];?></td>
                    <td><?php echo $dados = ['sobrenome'];?></td>
                    <td><?php echo $dados = ['email'];?></td>
                    <td><?php echo $dados = ['senha'];?></td>
                </tr>
            </tbody>
            <?php };?>
        </table>
    </body>
</html>